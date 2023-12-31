<?php

use App\Controllers\Home;
use App\Controllers\Pages;
use App\Controllers\UserController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
// mengarahkan jika diketik profile maka diarahkan ke fungsi profile
$routes->get('/profile', 'Home::profile');
$routes->get('/profile/(:any)/(:any)/(:any)', [Home::class, 'nama']);
$routes->get('/user', [UserController::class, 'index']);

$routes->get('/user/profile', [UserController::class, 'profile']);
$routes->get('/user/create', [UserController::class, 'create']);
$routes->post('/user/store', [UserController::class, 'store']);
$routes->get('/user/(:any)/edit', [UserController::class, 'edit']);
$routes->put('/user/(:any)', [UserController::class, 'update']);
$routes->delete('/user/(:any)', [UserController::class, 'destroy']);


$routes->get('/profile/(:any)', [Home::class, 'profile']);
$routes->get('/user/(:any)', [UserController::class, 'show']);