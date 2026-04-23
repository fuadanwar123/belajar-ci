<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

$routes->get('/', 'Home::index', ['filter' => 'auth']);
$routes->get('keranjang', 'TransaksiController::index', ['filter' => 'auth']);
$routes->get('transaksi', 'TransaksiController::index', ['filter' => 'auth']);
$routes->get('produk', 'ProdukController::index', ['filter' => 'auth']);
$routes->get('produk/tambah', 'ProdukController::tambah', ['filter' => 'auth']);
$routes->post('produk/simpan', 'ProdukController::simpan', ['filter' => 'auth']);
