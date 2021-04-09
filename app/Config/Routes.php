<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/about', 'About::index');

$routes->group('siswa', function ($routes) {
	$routes->get('', 'siswa\Siswa::index');
	$routes->POST('', 'siswa\Siswa::index');
	$routes->get('input', 'siswa\Siswa::input');
	$routes->get('leaderboard', 'siswa\Siswa::leaderboard');
	$routes->get('edit/(:any)', 'siswa\Siswa::edit/$1');
	$routes->get('detail/(:any)/(:segment)', 'siswa\Siswa::detail/$1/$2');
	$routes->get('delete/(:any)', 'siswa\Siswa::delete/$1');
	$routes->POST('tambahNilai/(:any)', 'siswa\Siswa::tambahNilai/$1');
	$routes->POST('update/(:any)', 'siswa\Siswa::update/$1');
	$routes->POST('save', 'siswa\Siswa::save');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
