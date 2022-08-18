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
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//...
/*
 * --------------------------------------------------------------------
 * Route ADMIN        //.............//.............//.............//.............    
 * --------------------------------------------------------------------
 */
$routes->get('/', 'Home::index');


$routes->get("/admin/Hasil", "AdminController::HasilKuesioner");

// Admin routes
$routes->group("admin", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "AdminController::index");
});
//  Route List pertanyaan Kategori Belajar 
$routes->get("/admin/list", "AdminController::ListSemua");
$routes->get("admin /inputKuis", "AdminController::ListBelajar");
$routes->post("admin/Cbelajar", "AdminController::createBelajar");
$routes->add("/admin/edit/(:num)", "AdminController::edit/$1");
$routes->add("/admin/update/(:num)", "AdminController::update/$1");
$routes->get("/admin/delete/(:num)", "AdminController::delete/$1");

//  Route List pertanyaan Kategori Bekerja 
$routes->get( "/admin/LBekerja", "AdminController::ListBekerja"); 
$routes->post("/admin/CrBekerja", "AdminController::CreateBekerja"); 
$routes->add("/admin/editBekerja/(:num)", "AdminController::editBekerja/$1");
$routes->add("/admin/upBekerja/(:num)", "AdminController::updateBekerja/$1");
$routes->get("/admin/Hapus/(:num)", "AdminController::HapusList/$1");

//  Route List pertanyaan Kategori Wirausaha 
$routes->get( "/admin/Lwirausaha", "AdminController::Listwirausaha"); 
$routes->post("/admin/Crwirausaha", "AdminController::Createwirausaha"); 
$routes->add("/admin/editwirausaha/(:num)", "AdminController::editwirausaha/$1");
$routes->add("/admin/upwirausaha/(:num)", "AdminController::updatewirausaha/$1");
$routes->get("/admin/hwirausaha/(:num)", "AdminController::HWirausaha/$1");

//  Route List pertanyaan Kategori Lain 
$routes->get("/admin/DaftarLainnya", "AdminController::List"); 
$routes->post("/admin/buat", "AdminController::BuatLainnya"); 
$routes->add("/admin/editlain/(:num)", "AdminController::editlainnya/$1");
$routes->add("/admin/updatelain/(:num)", "AdminController::updatelainnya/$1");
$routes->get("/admin/h_L/(:num)", "AdminController::HapusL/$1");

//  Route jumlah user per kategori
$routes->get("/admin/f-belajar", "AdminController::user_Belajar");
$routes->get("/admin/f-bekerja", "AdminController::user_Bekerja");
$routes->get("/admin/f-wirausaha", "AdminController::user_wirausaha");
$routes->get("/admin/f-k_lain", "AdminController::user_kategori_lain");
/*
 * --------------------------------------------------------------------
 * Route USER        //.............//.............//.............//.............    
 * --------------------------------------------------------------------
 */

// User routes

$routes->match(['get', 'post'], 'register', 'UserController::register', ['filter' => 'noauth']);
$routes->match(['get', 'post'], 'login', 'UserController::login', ["filter" => "noauth"]);
$routes->get('logout', 'UserController::logout');

//...//...//...//...//...//...//...//...//...//..

$routes->group("user", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "User::index");
});
$routes->get("/a", "User::indexx");

$routes->get('/user/answer', 'User::input_k_belajar');
$routes->post('/user/belajar', 'User::pertanyaan');
$routes->post('/user/insert', 'User::pertanyaan');

$routes->get("/indeks", "User::index2");



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
