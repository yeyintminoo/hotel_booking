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

// Frontend
Route::get('/','FrontendController@home')->name('homepage');

Route::get('rooms','FrontendController@room')->name('rooms');

Route::get('frontendgallery','FrontendController@frontendgallery')->name('frontendgallery');

Route::get('frontendabout','FrontendController@frontendabout')->name('frontendabout');

Route::get('frontendcontact','FrontendController@frontendcontact')->name('frontendcontact');

Route::get('frontendcheckout','FrontendController@frontendcheckout')->name('frontendcheckout');


// Backend
Route::middleware(['role:admin'])->group(function (){

Route::get('/dashboard', 'BackendController@dashboard')->name('dashboard');

Route::resource('room','RoomController');

Route::resource('roomtype','RoomTypeController');

Route::resource('reservedroom','ReservedRoomController');

Route::resource('reservation','ReservationController');

Route::resource('guest','GuestController');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



