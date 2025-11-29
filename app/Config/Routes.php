<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


// Baris ini akan membuat rute CRUD penuh untuk 'produk'
$routes->resource('pesanan');
