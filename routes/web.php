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

Route::get('/', 'HomeController@index');

Route::get('en', 'HomeController@index');

Route::get('nosotros', 'HomeController@nosotros');

Route::get('marketing', 'HomeController@marketing');

Route::get('comunicacion', 'HomeController@comunicacion');

Route::get('traduccion', 'HomeController@traduccion');

Route::get('novedades', 'HomeController@novedades');

Route::get('contacto', 'HomeController@contacto');

Route::get('{id}/noticia', 'HomeController@noticia');

Route::get('casos', 'HomeController@casos');

Route::get('casos/caso', 'HomeController@caso');

Auth::routes();

Route::get('home', 'HomeController@home');

/* ABM Usuarios */
Route::get('/users', 'UserController@listUsers');
Route::get('/profile/{id}', 'UserController@getEditUser');
Route::post('/editUser', 'UserController@postEditUser');
Route::get('/adduser', 'UserController@getAddUser');
Route::post('/adduser', 'UserController@postAddUser');
Route::get('/deleteUser/{id}', 'UserController@deleteUser');

/* ABM Noticias */
Route::get('news/{id?}', 'NewsController@listNews');
Route::get('addNew', 'NewsController@getAddNew');
Route::post('addNew', 'NewsController@postAddNew');
Route::post('editNew', 'NewsController@postEditNew');
Route::get('deleteNew/{id}', 'NewsController@deleteNew');
Route::get('approveNew/{id}', 'NewsController@approveNew');

Route::post('mail/contacto', 'EmailsController@contacto');
Route::post('mail/cv', 'EmailsController@cv');
Route::post('mail/news', 'EmailsController@news');

Route::get('lang/{lang}', function ($lang) {
        session(['lang' => $lang]);
        return \Redirect::back();
    })->where([
    'lang' => 'en|es'
]);