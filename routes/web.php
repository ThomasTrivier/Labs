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

Route::get('/', 'WelcomeController@index');

Route::get('/services', 'ServicesController@index');

Route::get('/blog', 'BlogController@index');

Route::get('/post', 'BlogPostController@index');

Route::get('/contact', 'ContactController@index');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware(['auth', 'verifyisadmin']);

//Navbar Links
Route::get('navbar/edit', 'NavbarController@edit')->middleware(['auth', 'verifyisadmin']);

Route::patch('/navbar/update', 'NavbarController@update')->middleware(['auth', 'verifyisadmin']);

//Section About
Route::get('about/edit', 'AboutController@edit')->middleware(['auth', 'verifyisadmin']);

Route::patch('/about/update', 'AboutController@update')->middleware(['auth', 'verifyisadmin']);

//Section Services
Route::resource('admin/services', 'ServicePanelController')->middleware(['auth', 'verifyisadmin']);

//Section Infos
Route::get('infos/edit', 'InfosController@edit')->middleware(['auth', 'verifyisadmin']);

Route::patch('/infos/update', 'InfosController@update')->middleware(['auth', 'verifyisadmin']);