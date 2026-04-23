<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');


$routes->get('produk', 'ProdukController::index');
$routes->get('produk/tambah', 'ProdukController::tambah');
$routes->post('produk/simpan', 'ProdukController::simpan');
$routes->get('transaksi', 'TransaksiController::index');
