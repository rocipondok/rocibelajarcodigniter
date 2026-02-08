<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/layanan', 'Layanan::index');
$routes->get('/harga', 'Harga::index');
$routes->get('/portofolio', 'Portofolio::index');



