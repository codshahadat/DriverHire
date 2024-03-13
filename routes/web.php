<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login;
use App\Http\Controllers\edit;
use Illuminate\Support\Facades\DB;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [login::class, 'login']);
Route::post('store-login', [login::class, 'loginstore']);
Route::get('register', [login::class, 'register']);
Route::get('customerreg', [login::class, 'customerreg']);
Route::post('store-customer', [login::class, 'customerstore']);
Route::post('store-register', [login::class, 'registerstore']);
Route::get('dashboard', [login::class, 'dashboard']);
Route::get('driver', [login::class, 'driverpanel']);
Route::get('customer', [login::class, 'customerpanel']);
Route::get('home', [login::class, 'home']);
Route::post('update-user', [edit::class, 'updateUser']);
Route::get('driver-list', [login::class, 'driver']);
Route::get('customer-list', [login::class, 'customer']);
Route::get('user/{status}', [edit::class, 'user']);
Route::get('approve-user/{userid}', [edit::class, 'approve']);
Route::get('deny-user/{userid}', [edit::class, 'deny']);
Route::get('logout', [Login::class, 'logout'])->name('logout');
