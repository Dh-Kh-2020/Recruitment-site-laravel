<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact-us', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/job-details', function () {
    return view('pages.jobDetails');
})->name('jobDetails');

Route::get('/jobs', function () {
    return view('pages.jobs');
})->name('jobs');

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/register', function () {
    return view('pages.signup');
})->name('register');

Route::get('/partners', function () {
    return view('pages.partners');
})->name('partners');

Route::get('/serveices', function () {
    return view('pages.services');
})->name('serveices');

Route::get('/admin/dashboard', function () {
    return view('pages.dashboard.dashboard');
})->name('dashboard');

// Route::get('/acount', function () {
//     return view('pages.dashboard.acount');
// });

Route::get('/admin/dashboard/course', function () {
    return view('pages.dashboard.course');
})->name('course');

Route::get('/admin/dashboard/experiences', function () {
    return view('pages.dashboard.experience');
})->name('experience');

Route::get('/admin/dashboard/qualifications', function () {
    return view('pages.dashboard.qualification');
})->name('qualification');

Route::get('/admin/dashboard/skills', function () {
    return view('pages.dashboard.skills');
})->name('skills');

// Route::post('/admin/dashboard', function () {
//     return view('pages.dashboard.dashboard');
// })->name('postLogin');
