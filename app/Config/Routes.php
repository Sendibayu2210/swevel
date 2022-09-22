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
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::auth');



// training page
$routes->get('/training', 'Training::index');
$routes->get('/detail-training', 'Training::detailTraining');

// Event
$routes->get('/event', 'Event::index');
$routes->get('/detail-event', 'Event::detailEvent');
$routes->get('/faq', 'Home::faq');
$routes->get('/kebijakan-privasi', 'Home::kebijakanPrvasi');

// Artikel
$routes->get('/artikel', 'Artikel::index');
$routes->get('/detail-artikel', 'Artikel::detailArtikel');

// Course
$routes->get('/course', 'Course::index');
$routes->get('/detail-course', 'Course::detailCourse');


// ADMIN
$routes->get('/dashboard', 'Admin::index');
$routes->get('/admin-faq', 'Admin::faq');
$routes->get('/admin-about-us', 'Admin::aboutus');
$routes->get('/admin-artikel', 'Admin::article');
$routes->get('/edit-artikel', 'Admin::editArticle');
$routes->post('/add-artikel', 'Admin::addArticle');

$routes->get('/admin-event', 'Admin::event');
$routes->get('/admin-portofolio', 'Admin::portofolio');
$routes->get('/more-event', 'Admin::moreEvent');
$routes->get('/payment', 'Admin::payment');


// User

$routes->get('/status', 'User::status');
$routes->get("/materi", "User::materi");
$routes->get("/kuis", "User::kuis");
$routes->get("/course-saved", "User::savedCourse");


//  PERCOBAAN
// movie
$routes->get('/movie', 'Movie::index');
// Rest API
$routes->resource('pegawai');


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
