<?php

namespace App\Controllers;

use App\SessionGuard as Guard;

use App\Models\Product;

class  ProductsController extends Controller
{
	public function __construct()
	{
		if (!Guard::isUserLoggedIn()) {
			redirect('/login');
		}

		parent::__construct();
	}

	public function view()
	{
		$this->sendPage('products/view', [
			'products' => Product::all()
		]);
	}

	public function showAddProduct()
	{
		$this->sendPage('products/add', [
		'errors' => session_get_once('errors'),
		'old' => $this->getSavedFormValues()
		]);
	}

	public function createProduct()
	{
		$data = $this->filterProductData($_POST);
		$model_errors1 = Product::validate($data);
		$model_errors2 = Product::validateCreate($data);

		if (empty($model_errors1) && empty($model_errors2)) {
			$product = new Product();
			$product->fill($data);

			$product->image_front = $_FILES['image_front']['name'];
			$product->image_back = $_FILES['image_back']['name'];
			$targetDir = "uploads/";
			$targetFile1 = $targetDir . basename($_FILES["image_front"]['name']);
			$targetFile2 = $targetDir . basename($_FILES["image_back"]["name"]);

			move_uploaded_file($_FILES["image_front"]["tmp_name"], $targetFile1);
			move_uploaded_file($_FILES["image_back"]["tmp_name"], $targetFile2);

			if(isset($_POST['new'])) {
				$new = 1;
			} else {
				$new = 0;
			}
			$product->new = $new;

			$product->user()->associate(Guard::user());
			$product->save();
			redirect('/products/add');
		}

		// Lưu các giá trị của form vào $_SESSION['form']
		$this->saveFormValues($_POST);

		// Lưu các thông báo lỗi vào $_SESSION['errors']
		redirect('/products/add', [
			'errors' => ($model_errors1 + $model_errors2)
		]);
	}
	protected function filterProductData(array $data)
	{
		return [
		'name' => $data['name'] ?? null,
		'price' => preg_replace('/\D+/', '', $data['price'])
		];
	}
	
	public function showEditProduct($product_id)
	{
		$product = Guard::user()->products->find($product_id);
		if (! $product) {
			$this->sendNotFound();
		}

		$form_values = $this->getSavedFormValues();
		$data = [
			'errors' => session_get_once('errors'),
			'product' => ( !empty($form_values) ) ?
			array_merge($form_values, ['id' => $product->id]) :
			$product->toArray()
			];

		$this->sendPage('products/edit', $data);
	}

	public function updateProduct($product_id)
	{
		$product = Guard::user()->products->find($product_id);
		if (! $product) {
			$this->sendNotFound();
		}

		$data = $this->filterProductData($_POST);
		$model_errors1 = Product::validate($data);
		$model_errors2 = Product::validateUpdate($data);

		if (empty($model_errors1) && empty($model_errors2)) {
			$product->fill($data);
			if (empty($_FILES['image_front']['name']) || empty($_FILES['image_back']['name'])) {
				$product->image_front = $product->image_front;
				$product->image_back = $product->image_back;
			}
			else {
				$product->image_front = $_FILES['image_front']['name'];
				$product->image_back = $_FILES['image_back']['name'];
				$targetDir = "uploads/";
				$targetFile1 = $targetDir . basename($_FILES["image_front"]['name']);
				$targetFile2 = $targetDir . basename($_FILES["image_back"]["name"]);

				move_uploaded_file($_FILES["image_front"]["tmp_name"], $targetFile1);
				move_uploaded_file($_FILES["image_back"]["tmp_name"], $targetFile2);
			}
			if(isset($_POST['new'])) {
				$new = 1;
			} else {
				$new = 0;
			}
			$product->new = $new;
			$product->save();
			
			redirect('/products/edit/'.$product_id,);
		}

		$this->saveFormValues($_POST);

		redirect('/products/edit/'.$product_id, [
			'errors' => ($model_errors1 + $model_errors2)
		]);	
	}

	public function deleteProduct($product_id)
	{
		$product = Guard::user()->products->find($product_id);
		if (! $product) {
			$this->sendNotFound();
		}
		unlink("./uploads/" . $product->image_front);
    	unlink("./uploads/" . $product->image_back); 
		
		$product->delete();
		redirect('/products/view');
	}
	
}
