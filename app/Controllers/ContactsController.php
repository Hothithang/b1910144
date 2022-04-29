<?php

namespace App\Controllers;

use App\SessionGuard as Guard;

use App\Models\Contact;

class  ContactsController extends Controller
{
	public function __construct()
	{
		if (!Guard::isUserLoggedIn()) {
			redirect('/login');
		}

		parent::__construct();
	}

	public function viewContact()
	{
		$this->sendPage('profiles/view', [
			'contacts' => Guard::user()->contacts
		]);
	}

	public function showAddContact()
	{
		$this->sendPage('profiles/user/add', [
			'errors' => session_get_once('errors'),
			'old' => $this->getSavedFormValues()
		]);
	}
	public function createContact()
	{
		$data = $this->filterContactData($_POST);
		$model_errors = Contact::validate($data);

		if (empty($model_errors)) {
			$contact = new Contact();
			$contact->fill($data);
			$contact->user()->associate(Guard::user());
			$contact->save();
			redirect('/profiles/view');
		}

		// Lưu các giá trị của form vào $_SESSION['form']
		$this->saveFormValues($_POST);
		// Lưu các thông báo lỗi vào $_SESSION['errors']
		redirect('/profiles/user/add', ['errors' => $model_errors]);
	}
	protected function filterContactData(array $data)
	{
		return [
		'name' => $data['name'] ?? null,
		'phone' => preg_replace('/\D+/', '', $data['phone']),
		'address' => $data['address'] ?? null
		];
	}

	public function showEditContact($contact_id)
	{
		$contact = Guard::user()->contacts->find($contact_id);
		if (! $contact) {
			$this->sendNotFound();
		}

		$form_values = $this->getSavedFormValues();
		$data = [
			'errors' => session_get_once('errors'),
			'contact' => ( !empty($form_values) ) ?
				array_merge($form_values, ['id' => $contact->id]) :
				$contact->toArray()
			];

		$this->sendPage('profiles/user/edit', $data);
	}
	public function updateContact($contact_id)
	{
		$contact = Guard::user()->contacts->find($contact_id);
		if (! $contact) {
		$this->sendNotFound();
		}

		$data = $this->filterContactData($_POST);
		$model_errors = Contact::validate($data);
		if (empty($model_errors)) {
			$contact->fill($data);
			$contact->save();
			redirect('/profiles/view');
		}
		
		$this->saveFormValues($_POST);
		redirect('/profiles/user/edit/'.$contact_id, [
			'errors' => $model_errors
		]);	
	}

	public function deleteContact($contact_id)
	{
		$contact = Guard::user()->contacts->find($contact_id);
		if (! $contact) {
			$this->sendNotFound();
		}
		$contact->delete();
		redirect('/profiles/view');
	}
	
}
