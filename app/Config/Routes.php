<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Catalogue::index');
$routes->get('/detail/(:segment)', 'Detail::index/$1');
$routes->get('/history', 'History::index');