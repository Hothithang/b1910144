<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require __DIR__ . '/../bootstrap.php';

session_start();

$router = new \Bramus\Router\Router();

// Auth routes
$router->post('/logout', '\App\Controllers\Auth\LoginController@logout');
$router->get('/register', '\App\Controllers\Auth\RegisterController@showRegisterForm');
$router->post('/register', '\\App\Controllers\Auth\RegisterController@register');
$router->get('/login', '\App\Controllers\Auth\LoginController@showLoginForm');
$router->post('/login', '\App\Controllers\Auth\LoginController@login');

// 404
$router->set404('\App\Controllers\Controller@sendNotFound');

// Store routes
$router->get('/', '\App\Controllers\StoreController@index');
$router->get('/home', '\App\Controllers\StoreController@index');

$router->get('/store/about-us', '\App\Controllers\StoreController@about');
$router->get('/store/recruit', '\App\Controllers\StoreController@recruitment');

// Product routes
$router->get('/products/view', '\App\Controllers\ProductsController@view');
$router->get('/products', '\App\Controllers\ProductsController@view');

$router->get('/products/add', '\App\Controllers\ProductsController@showAddProduct');
$router->post('/products/add', '\App\Controllers\ProductsController@createProduct');

$router->get('/products/edit/(\d+)', '\App\Controllers\ProductsController@showEditProduct');
$router->post('/products/(\d+)', '\App\Controllers\ProductsController@updateProduct');

$router->post('/products/delete/(\d+)', '\App\Controllers\ProductsController@deleteProduct');

// Contact routes
$router->get('/profiles/view', '\App\Controllers\ContactsController@viewContact');

$router->get('/profiles/user/add', '\App\Controllers\ContactsController@showAddContact');
$router->post('/profiles/user/add', '\App\Controllers\ContactsController@createContact');

$router->get('/profiles/user/edit/(\d+)', '\App\Controllers\ContactsController@showEditContact');
$router->post('/profiles/user/(\d+)', '\App\Controllers\ContactsController@updateContact');

$router->post('/profiles/user/delete/(\d+)', '\App\Controllers\ContactsController@deleteContact');

$router->run();
