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

$routes->get("/privacy", 'Home::kebijakanPrivasi');

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
$routes->get('/course/(:any)', 'Course::detailCourse/$1');
// $routes->get('/detail-course', 'Course::detailCourse');
$routes->get('/kurikulum', 'Course::detailKurikulum');




// ================== ADMIN ===================
$routes->get('/dashboard', 'Admin::index');

// milestone
$routes->get('/admin-milestone', 'Admin::milestone');
$routes->get('/add-milestone', 'Admin::addMilestone');
$routes->get('/edit-milestone/(:any)', 'Admin::editMilestone/$1');
$routes->post('/save-milestone', 'Admin::saveMilestone');
$routes->post('/update-milestone/(:any)', 'Admin::updateMilestone/$1');
$routes->delete('/delete-milestone/(:any)', 'Admin::deleteMilestone/$1');

// Kontak
$routes->get('/admin-kontak', 'Admin::kontak');
$routes->post('/add-kontak', 'Admin::addKontak');
$routes->post('/update-kontak', 'Admin::updateKontak');
$routes->delete('/delete-kontak', 'Admin::deleteKontak');

// profile
$routes->get('/profile', 'Admin::profile');
$routes->get('/profile/(:any)', 'Admin::editProfile/$1');
$routes->post('/update-profile/(:any)', 'Admin::updateProfile/$1');
// $routes->delete('/profile/(:any)', 'Admin::deleteProfile');

// FAQ
$routes->get('/admin-faq', 'Admin::faq');
$routes->post('/add-faq', 'Admin::addFaq');
$routes->post('/answer-question', 'Admin::updateAnswerFaq');
$routes->delete('/delete-faq', 'Admin::deleteFaq');

$routes->get('/admin-about-us', 'Admin::aboutus');
// artikel
$routes->get('/admin-artikel', 'Admin::article');
$routes->get('/edit-artikel', 'Admin::editArticle');
$routes->post('/add-artikel', 'Admin::addArticle');

// Course
$routes->get('/admin-course', "Admin::course");
$routes->get('/admin-course/(:any)', "Admin::detailCourse/$1");
$routes->get('/add-step-course/(:any)', 'Admin::addStepCourse/$1');
$routes->post('/save-step-course', 'Admin::saveSubCourse');

// Team
$routes->get('/admin-team', 'Admin::team');
$routes->post('/add-team', 'Admin::saveTeam');
$routes->post('/update-team', 'Admin::updateTeam');
$routes->delete('/delete-team', "Admin::deleteTeam");

$routes->get('/admin-event', 'Admin::event');
$routes->get('/admin-portofolio', 'Admin::portofolio');
$routes->get('/more-event', 'Admin::moreEvent');
$routes->get('/payment', 'Admin::payment');




// ===================== User =====================
// materi
$routes->get('/course-materi/(:any)/', 'Course::materi/$1');
$routes->get('/course-materi/(:any)/(:num)', 'Course::materi/$1/$2');
$routes->get('/status', 'User::status');
$routes->get("/materi", "User::materi");
$routes->get("/kuis", "User::kuis");
$routes->get("/course-saved", "User::savedCourse");
$routes->get('/submission', 'User::submission');



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
