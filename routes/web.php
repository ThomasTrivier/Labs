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

Route::get('/blog-post/{id}', 'BlogPostController@index');

Route::get('/blog-search', 'BlogController@search');

Route::get('/blog-categorie/{id}', 'BlogController@searchCategorie');

Route::get('/blog-tag/{id}', 'BlogController@searchTag');

Route::post('/blog-post/{id}/comment', 'BlogPostController@create');

Route::get('/contact', 'ContactController@index');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

//Users
Route::resource('admin/users', 'UserController')->middleware('auth');

//Navbar Links
Route::get('admin/navbar/edit', 'NavbarController@edit')->middleware(['auth', 'verifyisadmin']);

Route::patch('/admin/navbar/update', 'NavbarController@update')->middleware(['auth', 'verifyisadmin']);

//Medias Images
Route::get('admin/medias', 'ImageController@index')->middleware(['auth', 'verifyisadmin']);

Route::patch('/admin/medias/logo', 'ImageController@editLogo')->middleware(['auth', 'verifyisadmin']);

Route::get('/admin/medias/{id}/edit', 'ImageController@edit')->middleware(['auth', 'verifyisadmin']);

Route::patch('/admin/medias/{id}/update', 'ImageController@update')->middleware(['auth', 'verifyisadmin']);

Route::get('/admin/medias/create', 'ImageController@create')->middleware(['auth', 'verifyisadmin']);

Route::post('/admin/medias/store', 'ImageController@store')->middleware(['auth', 'verifyisadmin']);

Route::get('/admin/medias/{id}/delete', 'ImageController@delete')->middleware(['auth', 'verifyisadmin']);

//Section About
Route::get('admin/about/edit', 'AboutController@edit')->middleware(['auth', 'verifyisadmin']);

Route::patch('/admin/about/update', 'AboutController@update')->middleware(['auth', 'verifyisadmin']);

//Section Testimonials
Route::resource('admin/testimonials', 'TestimonialController')->middleware(['auth', 'verifyisadmin']);

//Section Teams
Route::resource('admin/teams', 'TeamController')->middleware(['auth', 'verifyisadmin']);

Route::patch('/admin/leader', 'TeamController@leader')->middleware(['auth', 'verifyisadmin']);

//Section Services
Route::resource('admin/services', 'ServicePanelController')->middleware(['auth', 'verifyisadmin']);

//Section Projets
Route::resource('admin/projects', 'ProjectController')->middleware(['auth', 'verifyisadmin']);

//Articles
Route::resource('admin/articles', 'ArticleController')->middleware(['auth', 'editor']);

Route::get('/publish', 'PublishController@index')->middleware(['auth', 'verifyisadmin']);

Route::patch('/published', 'PublishController@publish')->middleware(['auth', 'verifyisadmin']);

//Categories
Route::resource('admin/categories', 'CategorieController')->middleware(['auth', 'verifyisadmin']);

//Tags
Route::resource('admin/tags', 'TagController')->middleware(['auth', 'verifyisadmin']);

//Newsletter
Route::post('/newsletter/subscribe', 'NewsletterController@subscribe');

//Contact Form
Route::post('/form', 'FormController@create');

Route::get('admin/contacts', 'FormController@index')->middleware(['auth', 'verifyisadmin']);

Route::get('/admin/contacts/{id}/delete', 'FormController@delete')->middleware(['auth', 'verifyisadmin']);

//Section Infos
Route::get('admin/infos/edit', 'InfosController@edit')->middleware(['auth', 'verifyisadmin']);

Route::patch('/admin/infos/update', 'InfosController@update')->middleware(['auth', 'verifyisadmin']);