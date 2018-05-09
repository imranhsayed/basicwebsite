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

Route::get( '/', 'PagesController@get_home_page' );

Route::get( '/about', 'PagesController@get_about_page' );

Route::get( '/contact', 'PagesController@get_contact_page');

Route::post( '/contact/submit', 'MessagesController@submit' );

Route::get( '/messages', 'MessagesController@get_messages' );