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

Auth::routes();
///////////////////////////////////////////////////////////////////////  HEADER SIMPLE LINK ////////////////////////////////////////////////////////////////////////////
 Route::get('/', 'PageController@accueil')->name('home');
 Route::get('a-propos', 'PageController@about')->name('about');
 Route::get('simulation', 'PageController@simulation')->name('simulation');
 Route::get('actualite', 'PageController@actualite')->name('actualite');
 Route::get('cotation', 'PageController@cotation')->name('cotation');

 //////////////////////////////////////////////////////////////////// CONTACT //////////////////////////////////////////////////////////////////////////////////////////

Route::get('contact', 'ContactController@index')->name('contact');
Route::post('contact-us', ['as'=>'post-contact','uses'=>'ContactController@store']);
