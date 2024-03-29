<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/login', [SiteController::class, 'login']);
Route::get('/register', [SiteController::class,'registration']);
Route::get('/profile', [SiteController::class, 'profile']);

Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/viewSession', [LoginController::class, 'view_session']);

Route::post('/register', [RegController::class, 'storeHire']);
Route::post('/login', [LoginController::class, 'login']);





Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/job-single', function () {
    return view('job-single');
});
Route::get('/post-job', function () {
    return view('post-job');
});
Route::get('/register', function () {
    return view('register');
});


// admin
Route::get('/admin-panel', function () {
    return view('admin-panel.index');
});
Route::get('/admin-panel/admins/admins', function () {
    return view('admin-panel.admins.admins');
});
Route::get('/admin-panel/categories-admins/show-categories', function () {
    return view('admin-panel.categories-admins.show-categories');
});
Route::get('/admin-panel/jobs-admins/show-jobs', function () {
    return view('admin-panel.jobs-admins.show-jobs');
});
Route::get('/admin-panel/applications-admins/show-apps', function () {
    return view('admin-panel.applications-admins.show-apps');
});
Route::get('/admin-panel/admins/create-admins', function () {
    return view('admin-panel.admins.create-admins');
});
Route::get('/admin-panel/admins/login-admins', function () {
    return view('admin-panel.admins.login-admins');
});






