<?php

use App\Controllers\ProductController;
use App\Controllers\StudentController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/products', [ProductController::class, 'index']);
$routes->get('/products/(:segment)', [ProductController::class, 'show']);


$routes->get('/students', [StudentController::class, 'index']);
$routes->get('/students/create', [StudentController::class, 'create']);
$routes->post('/students/store', [StudentController::class, 'store']);

$routes->get('/students/edit/(:num)', "StudentController::edit/$1");
$routes->put('/students/update/(:num)', "StudentController::update/$1");

$routes->delete('/students/delete/(:num)', "StudentController::delete/$1");
