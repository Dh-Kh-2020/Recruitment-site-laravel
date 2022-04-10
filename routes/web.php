<?php

use App\Http\Controllers\SiteCtrl;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthCtrl;
use App\Http\Controllers\admin\RoleCtrl;
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

// =============== Admin Dashsboard =================
Route::get('/admin/dashboard', [AuthCtrl::class, 'adminDashboard'])->name('admin');

    // ------ Auth -------
Route::get('admin/login', [AuthCtrl::class, 'showLogin'])->name('admin-login');
Route::post('admin/login', [AuthCtrl::class, 'login'])->name('do-admin-login');
Route::get('admin/register', [AuthCtrl::class, 'showRegister'])->name('admin-register');
Route::post('admin/register', [AuthCtrl::class, 'register'])->name('do-admin-register');

    // ------ Users -------
// Route::get('/admin/dashboard/users-list', [AuthCtrl::class, 'showAllUsers'])->name('all-users');
Route::get('/admin/dashboard/users-list', [AuthCtrl::class, 'listAllUsers'])->name('all-users');
Route::get('/admin/dashboard/add-new-user', [AuthCtrl::class, 'showNewUser'])->name('add-user');
Route::get('/admin/dashboard/edit-user', [AuthCtrl::class, 'showEditUser'])->name('edit-user');

    // ------ Role -------
Route::get('/admin/dashboard/roles-list', [RoleCtrl::class, 'showAllRoles'])->name('all-roles');
Route::get('/admin/dashboard/add-new-role', [RoleCtrl::class, 'showNewRole'])->name('add-role');
Route::get('/admin/dashboard/edit-role', [RoleCtrl::class, 'showEditRole'])->name('edit-role');

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