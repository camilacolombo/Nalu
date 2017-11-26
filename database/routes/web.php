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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home','HomeController@home');

Route::get('/faq', 'FaqController@faqe');

Route::get('/elset', 'ElSetController@elseto');

Route::get('/perfil', 'PerfilController@perfilo');













/* Rutas de practica

Route::get('usuarios/{id}', function ($id) {
    return "Mostrando detalle del usuario: {$id}";
})->where('id','\d+');


Route::get('usuarios/nuevo', function () {
    return 'Crear Nuevo Usuario';
});


Route::get('saludo/{name}/{nickname?}', function ($name, $nickname = null) {
   if ($nickname){
   return "Bienvenido {$name} esta es tu web. Ahora sos {$nickname}";	
   }
   else{
   	return "Bienvenido {$name}";
   }
});
*/




