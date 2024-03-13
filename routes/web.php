<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login;
use App\Http\Controllers\edit;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\slider;
use App\Http\Controllers\SslCommerzPaymentController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [login::class, 'home']);


Route::get('login', [login::class, 'login']);
Route::post('store-login', [login::class, 'loginstore']);
Route::get('register', [login::class, 'register']);
Route::get('customerreg', [customer::class, 'customerreg']);
Route::post('store-customer', [customer::class, 'customerstore']);
Route::post('store-register', [login::class, 'registerstore']);
Route::get('dashboard', [login::class, 'dashboard']);
Route::get('driver', [login::class, 'driverpanel']);
Route::get('customer', [login::class, 'customerpanel']);
Route::get('home', [login::class, 'home']);
Route::get('sign', [login::class, 'signup']);
Route::post('update-user/{id}', [edit::class, 'updateUser'])->name('update-user');

Route::get('edit_user/{id}', [edit::class, 'editUser']);

Route::get('driver-list', [login::class, 'driver']);
Route::get('customer-list', [login::class, 'customer']);
Route::get('user/{status}', [edit::class, 'user']);
Route::get('approve-user/{userid}', [edit::class, 'approve']);
Route::get('deny-user/{userid}', [edit::class, 'deny']);
Route::get('logout', [Login::class, 'logout'])->name('logout');


//slider 
Route::get('slider', [slider::class, 'slider']);
Route::post('/upload-image', [slider::class, 'uploadImage']);

//booking
Route::get('availabledriver', [booking::class, 'availabledriver']);
Route::get('addbooking/{id}', [booking::class, 'addbooking']);
Route::post('bookingstore', [booking::class, 'bookingstore']);
Route::get('showbooking', [booking::class, 'showbooking']);
Route::get('showbook', [login::class, 'book']);


Route::get('approveuser/{id}', [booking::class, 'approveBooking']);
Route::get('denyuser/{id}', [booking::class, 'denyBooking']);

Route::get('bookingstatus', [booking::class, 'bookingstatus']);


//profile
Route::get('customerprofile', [customer::class, 'cusprofile']);
Route::get('privatedriver', [booking::class, 'privatedriver']);
Route::get('companydriver', [booking::class, 'companydriver']);
Route::get('uberdriver', [booking::class, 'uberdriver']);
Route::get('editinfo', [customer::class, 'editinfo']);
Route::get('editprofile', [customer::class, 'editprofile']);


//verification

Route::get('verification', [edit::class, 'verify']);
Route::post('verify/{id}', [edit::class, 'verification'])->name('verification');

Route::get('document/{status}', [verify::class, 'document']);
Route::get('verify-user/{userid}', [verify::class, 'verified']);
Route::get('unverify-user/{userid}', [verify::class, 'unverified']);


//customer verification

Route::get('verified', [customer::class, 'verified']);

//delete

Route::get('deletebooking/{id}', [booking::class, 'deletebook'])->name('deletebook');

Route::get('delete_user/{id}', [login::class, 'deleteuser'])->name('deleteuser');


// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END
