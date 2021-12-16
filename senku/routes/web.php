<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

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

// Contoh Route
// Route::get('/', function () {
//     return view('homepage');
// });

// Homepage
Route::get('/', 'HomepageController@index')->name('homepage');
Route::get('/', 'AuthController@balikHomepage')->name('home');

// Login
Route::get('login', 'AuthController@login')->name('login');
Route::post('masuk', 'AuthController@masuk')->name('masuk');

// register
Route::get('register', 'AuthController@register')->name('register');
Route::post('daftar', 'AuthController@daftar')->name('daftar');

// signout
Route::get('signout', 'AuthController@signout')->name('signout');

// profile
Route::get('profile', 'ProfileController@profile')->name('profile');
Route::post('profileUpdate', 'ProfileController@profileUpdate')->name('profileUpdate');
Route::get('reminder', 'ProfileController@reminder')->name('reminder');

// health
Route::get('health', 'HealthController@health')->name('health');
// Route::get('article1', 'HealthController@article1')->name('article1');
Route::get('calc', 'HealthController@calc')->name('calc');

// workout
Route::get('workout', 'WorkoutController@workout')->name('workout');
