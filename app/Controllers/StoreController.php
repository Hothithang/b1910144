<?php

namespace App\Controllers;

use App\SessionGuard as Guard;

class  StoreController extends Controller
{
	public function __construct()
	{
		if (!Guard::isUserLoggedIn()) {
			redirect('/login');
		}

		parent::__construct();
	}

	public function index()
	{
		$this->sendPage('store/home');
	}

	public function about()
	{
		$this->sendPage('store/about-us');
	}

	public function recruitment()
	{
		$this->sendPage('store/recruitment');
	}

}
