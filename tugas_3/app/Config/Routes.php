<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index', ['as' => 'home']);


// Testing Routes 
$routes->get('test', function () {
    echo "Journey Start Here, Testing On";
});


// Routes Buku
$routes->group('buku', function ($routes) {
    $routes->get("/", 'Buku::index');
    $routes->get("judul-buku/", 'Buku::judul', ['as' => 'judul']);
    $routes->get("get-buku/(:num)", 'Buku::getBuku/$1');
    $routes->get("get-title/(:alpha)", 'Buku::getJudulBuku/$1');
});

// Routes Mahasiswa 
$routes->group('mahasiswa', function ($routes) {
    $routes->get('/', 'Mahasiswa::index', ['as' => 'mahasiswa.index']);
    $routes->get('add-mahasiswa', 'Mahasiswa::addMahasiswa', ['as' => 'mahasiswa.create']);
    $routes->get('update-mahasiswa/(:num)', 'Mahasiswa::updateMahasiswa/$1', ['as' => 'mahasiswa.update']);
    $routes->get('delete-mahasiswa/(:num)', 'Mahasiswa::deleteMahasiswa/$1', ['as' => 'mahasiswa.destroy']);
    $routes->get('profile-mahasiswa/(:alpha)/(:num)', 'Mahasiswa::profileMahasiswa/$1/$2', ['as' => 'mahasiswa.profile']);
});

// Sub-Directory Admin Route Group
$routes->group('admin', function ($routes) {

    // Make Users Grouping
    $routes->group('users', function ($routes) {
        $routes->get('/', 'Admin\Users::index');
    });

    // Make Blog Grouping
    $routes->group('blog', function ($routes) {
        $routes->get('/', 'Admin\Blog::index');
    });
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
