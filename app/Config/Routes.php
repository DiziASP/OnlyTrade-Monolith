<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/auth/login', 'Auth::index');
$routes->get('/auth/register', 'Auth::register');


$routes->get('/', 'Catalogue::index');
$routes->get('/history', 'Catalogue::history');
