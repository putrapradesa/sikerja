<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::index');
$routes->get('/', 'Admin\DashboardController');
// $routes->get('/sikerja/login', 'Auth::index');
// $routes->post('/sikerja/proses', 'Auth::valid_login');
// $routes->get('/sikerja/user', 'Admin\DashboardController::user');
// $routes->get('/sikerja/logout', 'Auth::logout');
//route admin dahboard
// $routes->get('dashboard', 'Admin\DashboardController');

// $routes->get('/sikerja/Account', 'AccountController::index');
// $routes->post('/sikerja/Account/Add', 'AccountController::add');
// $routes->post('/sikerja/Account/Detail', 'AccountController::getById');
// $routes->post('/sikerja/Account/Edit', 'AccountController::edit');
// $routes->post('/sikerja/Account/Delete', 'AccountController::delete');

// $routes->get('/sikerja/Bon', 'BonController::index');
// $routes->get('/sikerja/Bon/User', 'BonController::user');
// $routes->get('/sikerja/Bon/Tampil/(:any)', 'BonController::tampil/$1');
// $routes->post('/sikerja/Bon/Delegation', 'BonController::getbyId');
// $routes->post('/sikerja/Bon/Perbaikan', 'BonController::getbyIdPerbaikan');
// $routes->post('/sikerja/Bon/Detail', 'BonController::getdetail');
// $routes->post('/sikerja/Bon/Update/(:any)', 'BonController::update/$1');
// $routes->post('/sikerja/Bon/Add', 'BonController::add');
// $routes->post('/sikerja/Bon/User/Detail', 'BonController::getdetailuser');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
