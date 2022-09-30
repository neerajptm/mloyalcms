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
$routes->setDefaultController('Lbackend');
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
//$routes->get('/', 'Home::index');
$routes->get('login', 'Home::login');
// $routes->get('/', 'Lbackend::index');
$routes->get('/', 'Lbackend::allCampaigns');
$routes->get('newcampaign', 'Lbackend::addCampaigns');
$routes->get('editcampaign/(:any)', 'Lbackend::editCampaigns/$1');
$routes->get('newpost', 'Lbackend::createNewPost');
$routes->get('brand/(:any)/(:any)', 'Lbackend::hometemplate/$1/$2');
$routes->get('posts', 'Lbackend::allPosts');
$routes->get('editpost/(:any)', 'Lbackend::updtPosts/$1');
$routes->get('logout', 'Lbackend::Logout');
$routes->get('mqml/(:any)', 'Lbackend::genMqml/$1');

$routes->post('editorupload', 'Lbackend::editorUpload');


$routes->post('validate', 'Home::validate_login');
$routes->post('bkendsave', 'Lbackend::lBacendfrmsave');
$routes->post('savepost', 'Lbackend::savenPost');
$routes->post('bkendupdt', 'Lbackend::bkendUpdt');
$routes->post('updtpost', 'Lbackend::updatePost');

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
