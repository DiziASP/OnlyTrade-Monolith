<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Catalogue::index');
$routes->get('/detail', 'Detail::index');