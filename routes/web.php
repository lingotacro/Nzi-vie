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

//Route::get('/kgb',function (){
//    return view('layouts.admin');
//});

Auth::routes();
//Route::get('login','LoginController@showLoginForm ')->name('login');
///////////////////////////////////////////////////////////////////////  HEADER SIMPLE LINK ////////////////////////////////////////////////////////////////////////////
 Route::get('/', 'PageController@accueil')->name('home');
 Route::get('a-propos', 'PageController@about')->name('about');
 Route::get('simulation', 'PageController@simulation')->name('simulation');
 Route::get('actualite', 'PageController@actualite')->name('actualite');
 Route::get('cotation', 'PageController@cotation')->name('cotation');

 //////////////////////////////////////////////////////////////////// CONTACT //////////////////////////////////////////////////////////////////////////////////////////

Route::get('contact', 'ContactController@index')->name('contact');
Route::post('contact-us', ['as'=>'post-contact','uses'=>'ContactController@store']);


/////////////////////////////////////////////////////////////// ADMINISTRATION ////////////////////////////////////////////////////////////////
Route::group(['middleware' => 'auth'], function(){

    Route::group(['prefix' => 'administration'], function (){
        Route::get('/accueil','AdministrationController@index')->name('admin-index');
        Route::get('/ajoute-actualite','ActualiteController@index')->name('admin-actu-add');
        Route::post('/ajoute-actualite','CategorieActualiteController@store')->name('admin-cat-actu-str');
        Route::get('/nouvelle-actualite','ActualiteController@index')->name('admin-actu-new');
        Route::post('/nouvelle-actualite','ActualiteController@store')->name('admin-actu-str');
        Route::get('/liste-actualite','ActualiteController@show')->name('admin-actu-shw');
    });
    Route::group(['prefix' => 'administration-config'], function (){

        Route::get('reseaux-sociaux','AdministrationController@getPageSocial')->name('social');
        Route::post('reseaux-sociaux','AdministrationController@storeSocial')->name('social-post');
        Route::post('reseaux-sociaux-edit/{sociale}','AdministrationController@editSocial')->name('social-edit');
        Route::put('reseaux-sociaux-del/{sociale}','AdministrationController@deleteSocial')->name('social-delete');
    });

});
