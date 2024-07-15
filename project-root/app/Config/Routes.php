<?php

use App\Controllers\ProductController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/products', [ProductController::class, 'index']);
// $routes->get('/products/(:segment)', [ProductController::class, 'show']);


$routes->group('users', function ($routes) {
    $routes->get('products', [ProductController::class, 'index']);
    $routes->get('products/(:segment)', [ProductController::class, 'show']);
});
