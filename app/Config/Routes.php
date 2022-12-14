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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Pages::login');
$routes->get('/registration', 'Pages::registration');

$routes->get('/home', 'Pages::home');
$routes->get('/profile', 'Pages::profile');
$routes->get('/editprofile', 'Pages::editprofile');
$routes->get('/editpassword', 'Pages::editpassword');
$routes->get('/resetpassword', 'Pages::resetpassword');
$routes->get('/myorder', 'Pages::myorder');
$routes->get('/showorder', 'Pages::showorder');
$routes->get('/complaint', 'Pages::complaint');

$routes->get('/categories', 'Pages::categories');
$routes->get('/search', 'Pages::search');
$routes->get('/product', 'Pages::product');
$routes->get('/checkout', 'Pages::checkout');
$routes->get('/paymentMethod', 'Pages::paymentMethod');
$routes->get('/confirmation', 'Pages::confirmation');
$routes->get('/profilMerchant', 'Pages::profilMerchant');

$routes->get('/dashboardSeller', 'Pages::dashboardSeller');
$routes->get('/productSeller', 'Pages::productSeller');
$routes->get('/profileSeller', 'Pages::profileSeller');
$routes->get('/editSeller', 'Pages::editSeller');
$routes->get('/addProduct', 'Pages::addProduct');
$routes->get('/manageProduct', 'Pages::manageProduct');
$routes->get('/editProduct', 'Pages::editProduct');
$routes->get('/orderSeller', 'Pages::orderSeller');
$routes->get('/complaintSeller', 'Pages::complaintSeller');

$routes->get('/dashboardAdmin', 'Pages::dashboardAdmin');
$routes->get('/profileAdmin', 'Pages::profileAdmin');
$routes->get('/editAdmin', 'Pages::editAdmin');
$routes->get('/addAccount', 'Pages::addAccount');
$routes->get('/confirmProduct', 'Pages::confirmProduct');
$routes->get('/complaintList', 'Pages::complaintList');
$routes->get('/complaintDetail', 'Pages::complaintDetail');
$routes->get('/sellerList', 'Pages::sellerList');
$routes->get('/buyerList', 'Pages::buyerList');

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
