<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/hello', 'Hello::index');
$routes->get('/mahasiswa', 'Mahasiswa::index');
$routes->get('/mahasiswa', 'Mahasiswa::display');
$routes->get('/mahasiswa/detail/(:num)', 'Mahasiswa::detail/$1');
$routes->get('/mahasiswa/form', 'Mahasiswa::form');  
$routes->post('/mahasiswa/simpan', 'Mahasiswa::simpan');
