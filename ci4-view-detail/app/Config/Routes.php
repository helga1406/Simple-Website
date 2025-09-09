<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/hello', 'Hello::index');
$routes->get('/dosen/display', 'Dosen::display');
$routes->get('/tabel', 'Tabel::index');
$routes->get('/mahasiswa', 'Mahasiswa::display');
$routes->get('/mahasiswa/detail/(:num)', 'Mahasiswa::detail/$1');
