<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/auth/login', 'Auth::index');
$routes->get('/auth/register', 'Auth::register');
$routes->post('/api/auth/login', 'Auth::loginAction');
$routes->post('/api/auth/register', 'Auth::registerAction');
$routes->get('/api/auth/logout', 'Auth::logoutAction');


$routes->get('/', 'Catalogue::index', ['filter' => 'route']);
$routes->get('/detail/(:any)', 'Catalogue::detail/$1', ['filter' => 'route']);
$routes->get('/history', 'Catalogue::history', ['filter' => 'route']);
$routes->post('/api/buy', 'Catalogue::buyAction', ['filter' => 'route']);
