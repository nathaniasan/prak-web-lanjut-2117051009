<?php

use App\Controllers\Home;
use App\Controllers\Pages;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
// mengarahkan jika diketik profile maka diarahkan ke fungsi profile
$routes->get('/profile', 'Home::profile');
$routes->get('/profile/(:any)/(:any)/(:any)', [Home::class, 'profile']);
$routes->get('/profile/(:any)', [Home::class, 'profile']);

$routes->get('/pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);