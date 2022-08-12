<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\authController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\googleController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ClientsController;
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
    return view('index');
});


// authentication

Route::view('login','auth.login')->name('login');
Route::post('login-action', [authController::class, 'login'])->name('login-action');


Route::view('register','auth.register')->name('register');
Route::post('register-action', [authController::class, 'Registration'])->name('register-action');


Route::get('logout', [authController::class, 'logout'])->name('logout');


Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);


// ======authentication ======

Route::view('dashboard','home.dashboard')->name('dashboard')->middleware('auth');
// Route::view('dashboard/add-new-clients','home.add-new-clients')->name('add-client');

Route::view('edit-profile','home.edit-profile')->name('edit-profile')->middleware('auth');
Route::view('profile','home.profile')->name('profile')->middleware('auth');
Route::get('dashboard-clients', [DashboardController::class, 'showAllClients'])->name('all-clients');
Route::get('dashboard-my-profile', [DashboardController::class, 'ShowMyProfile'])->name('my-profile');
Route::post('dashboard-update-my-profile/{id}', [DashboardController::class, 'UpdateMyProfile'])->name('update-my-profile');


Route::get('dashboard-edit-messages', [DashboardController::class, 'editProfileMessages'])->name('edit-messages');
Route::post('dashboard-update-messages/{id}', [DashboardController::class, 'editMessages'])->name('update-my-messages');


Route::post('dashboard-add-clients', [DashboardController::class, 'addNewClient'])->name('add-client');
Route::get('dashboard-clients-profile/{id}', [DashboardController::class, 'showCLientProfile'])->name('client-profile');

Route::get('dashboard-clients-details/{id}', [DashboardController::class, 'showCLientDetails'])->name('client-details');
Route::get('dashboard-edit-clients-profile/{id}', [DashboardController::class, 'showProfilePage'])->name('edit-client-profile');

Route::post('dashboard-update-client-profile/{id}', [DashboardController::class, 'UpdateClientProfile'])->name('update-client-profile');
Route::get('dashboard-client-gallery/{id}', [DashboardController::class, 'ClientGallery'])->name('client-gallery');
Route::get('dashboard-add-client-gallery/{id}', [DashboardController::class, 'AddClientGallery'])->name('add-client-gallery');
Route::post('dashboard-save-client-gallery', [DashboardController::class, 'storeClientGallery'])->name('save-client-gallery');

Route::get('dashboard-delete-client/{id}', [DashboardController::class, 'DeleteClient'])->name('delete-client');


// search
Route::post('search-client', [DashboardController::class, 'SearchClient'])->name('search-client');



Route::get('dashboard-reach-client/{id}', [DashboardController::class, 'reachClient'])->name('reach-client');
Route::get('dashboard-client-birthdays', [DashboardController::class, 'clientBirthday'])->name('birthdays');
Route::post('dashboard-feedback-form', [DashboardController::class, 'Processfeedback'])->name('feedback-form');

// Route::get('dashboard-feedback-form/{User:name}', [DashboardController::class, 'Sharefeedback'])->name('share-feedback-form');

 Route::get('dashboard-feedback-form/{id}/{name}', [DashboardController::class, 'Sharefeedback'])->name('share-feedback-form');
// Route::get('dashboard-share', [DashboardController::class, 'ShareWidget'])->name('share');




Route::get('dashboard-reviews', [DashboardController::class, 'reviews'])->name('reviews');
Route::post('dashboard-reviews-status/{id}', [DashboardController::class, 'reviewStatus'])->name('reviews-status');


Route::get('dashboard-portfolio', [DashboardController::class, 'portfolio'])->name('portfolio');

Route::get('dashboard-delete-photo/{id}', [DashboardController::class, 'DeletePhoto'])->name('delete-photo');



Route::get('dashboard-portfolio-of/{id}', [DashboardController::class, 'sharePortfolio'])->name('my-portfolio');






// Route::post('dashboard-profile', [DashboardController::class, 'Registration'])->name('register-action');


// dashboard dashboard



// dashboard dashboard



Route::view('test','home.test');

Route::view('thankyou','home.thank-you');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('send-mail', [Controller::class, 'mail']);


Route::get('bday', [ClientsController::class, 'clientBirthday']);





Route::post('clients-info', [DashboardController::class, 'NewClientInfo'])->name('your-details');

Route::get('clients-info/{id}/{name}', [DashboardController::class, 'NewClientInfoPage'])->name('new-client-details');



// admin dashboard


// Route::view('admin','control.index');


Route::get('thedesignerr', [DashboardController::class, 'adminpage']);




