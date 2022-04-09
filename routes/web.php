<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthCtrl;
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

// =============== Main Pages =================
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

// =================== Applicant Dashboard ====================
Route::get('/applicant/dashboard', function () {
    return view('pages.applicant.dashboard');
})->name('applicant');

Route::get('/applicant/dashboard/course', function () {
    return view('pages.applicant.course');
})->name('course');

Route::get('/applicant/dashboard/experiences', function () {
    return view('pages.applicant.experience');
})->name('experience');

Route::get('/applicant/dashboard/qualifications', function () {
    return view('pages.applicant.qualification');
})->name('qualification');

Route::get('/applicant/dashboard/skills', function () {
    return view('pages.applicant.skills');
})->name('skills');

// =============== Admin Dashsboard =================
Route::get('/admin/dashboard', function () {
    return view('pages.admin.dashboard');
})->name('admin');

// ------ Auth -------
Route::get('/admin/dashboard/users-list', function () {
    return view('pages.admin.users-list');
})->name('all-users');

Route::get('/admin/dashboard/add-new-user', function () {
    return view('pages.admin.new-user');
})->name('add-user');

Route::get('/admin/dashboard/edit-user', function () {
    return view('pages.admin.edit-user');
})->name('edit-user');

Route::get('admin/login', [AuthCtrl::class, 'showLogin'])->name('admin-login');
Route::post('admin/login', [AuthCtrl::class, 'login'])->name('do-admin-login');
Route::get('admin/register', [AuthCtrl::class, 'showRegister'])->name('admin-register');
Route::post('admin/register', [AuthCtrl::class, 'register'])->name('do-admin-register');

// ------ Role -------
Route::get('/admin/dashboard/roles-list', function () {
    return view('pages.admin.roles-list');
})->name('all-roles');

Route::get('/admin/dashboard/add-new-role', function () {
    return view('pages.admin.new-role');
})->name('add-role');

Route::get('/admin/dashboard/edit-role', function () {
    return view('pages.admin.edit-role');
})->name('edit-role');

// ------ 