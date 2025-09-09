<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Auth::login');
// $routes->get('/home', 'Home::index');
$routes->get('auth/login', 'Auth::login');               // tampilkan form login
$routes->post('auth/loginProcess', 'Auth::loginProcess'); // proses login (cek username & password)
$routes->get('auth/logout', 'Auth::logout');             // aksi logout (hapus session)
$routes->get('dashboard', 'Dashboard::index');           // halaman dashboard (setelah login)

