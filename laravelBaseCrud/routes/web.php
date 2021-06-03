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

Route::get('/', 'GuestController@indexView') -> name('indexLink');
Route::get('/guest/{id}', 'GuestController@guestView') -> name('guestLink');
Route::get('/create/guest', 'GuestController@guestCreateView') -> name('guestCreateLink');

Route::post('/store/guest', 'GuestController@storeGuest') -> name('storeGuestLink');
