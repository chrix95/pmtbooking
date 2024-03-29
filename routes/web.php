<?php

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

Route::get('/', 'PagesController@index')->name('welcome');
Route::get('about', 'PagesController@about')->name('about');
Route::get('faqs', 'PagesController@faqs')->name('faqs');
Route::get('terminal', 'PagesController@terminal')->name('terminal');
Route::get('services', 'PagesController@services')->name('services');
Route::get('contact', 'PagesController@contact')->name('contact');
// Booking routes
Route::get('booking', 'PagesController@bookingSearch')->name('booking.search');
Route::get('booking-status', 'PagesController@bookingStatus')->name('booking.status');
Route::get('completed', 'PagesController@completed')->name('completed');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
