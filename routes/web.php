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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home','HomeController@index');

Route::get('/faq','FaqContoller@faqo');

Route::get('/elset','ElsetController@elseto');

Route::get('/perfil','PerfilController@prueba');

Route::get('/post','PostController@mostrar');

Route::post('/post','PostController@guardapost');

Route::get('profile','UserController@profile');

Route::get('tablero','TableroController@verpost');
