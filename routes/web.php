<?php

use App\Http\Controllers\SiteCtrl;
use App\Http\Controllers\admin\AuthCtrl;
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

// =============== Main Site Pages =================
Route::get('/', [SiteCtrl::class, 'viewHome'])->name('home');
Route::get('/about', [SiteCtrl::class, 'viewAbout'])->name('about');
Route::get('/contact-us', [SiteCtrl::class,'viewContactUs'])->name('contact');
Route::get('/job-details', [SiteCtrl::class, 'viewJobDetails'])->name('jobDetails');
Route::get('/jobs', [SiteCtrl::class, 'viewJobs'])->name('jobs');
Route::get('/partners', [SiteCtrl::class, 'viewPartners'])->name('partners');
Route::get('/serveices', [SiteCtrl::class, 'viewServices'])->name('serveices');

// =================== Applicant Dashboard ====================
Route::get('/applicant/dashboard', function () {
    return view('pages.applicant.dashboard');
})->name('applicant');

Route::get('/login', function () {
    return view('pages.applicant.login');
})->name('login');

Route::get('/register', function () {
    return view('pages.applicant.signup');
})->name('register');

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
Route::get('admin/login', [AuthCtrl::class, 'showLogin'])->name('admin-login');
Route::post('admin/do-login', [AuthCtrl::class, 'login'])->name('do-admin-login');
Route::get('admin/register', [AuthCtrl::class, 'showRegister'])->name('admin-register');
Route::post('admin/do-register', [AuthCtrl::class, 'register'])->name('do-admin-register');

    // ------ Admin -------
Route::get('/admin/dashboard/users-list', function () {
    return view('pages.admin.users-list');
})->name('all-users');

Route::get('/admin/dashboard/add-new-user', function () {
    return view('pages.admin.new-user');
})->name('add-user');

Route::get('/admin/dashboard/edit-user', function () {
    return view('pages.admin.edit-user');
})->name('edit-user');

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