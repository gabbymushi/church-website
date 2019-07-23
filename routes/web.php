<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@index')->name('home');
Route::get('/about-us', 'HomeController@aboutUs');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Blog routes;
Route::get('/blog', 'BlogController@index');
Route::get('/post/blog', 'BlogController@create');
Route::get('/blog/{id}', 'BlogController@index')->name('post');
Route::get('/dashboard', [
    'uses' => 'HomeController@dashboard',
    'as' => 'dashboard.home'
]);

Route::get('/users', [
    'uses' => 'HomeController@users',
    'as' => 'users'
]);
Route::get('/blog/edit/{id}', [
    'uses' => 'BlogController@edit',
    'as' => 'blog.edit'
]);
Route::post('/blog/update/{id}', [
    'uses' => 'BlogController@update',
    'as' => 'blog.update'
]);
Route::get('/blog/delete/{id}', [
    'uses' => 'BlogController@destroy',
    'as' => 'blog.delete'
]);
//Events Routes
Route::get('/events', [
    'uses' => 'EventsController@index',
    'as' => 'events'
]);
Route::get('/events/create', [
    'uses' => 'EventsController@create',
    'as' => 'event.create'
]);
Route::post('/events/store', [
    'uses' => 'EventsController@store',
    'as' => 'event.store'
]);
Route::get('/events/edit/{id}', [
    'uses' => 'EventsController@edit',
    'as' => 'event.edit'
]);

Route::post('/events/update/{id}', [
    'uses' => 'EventsController@update',
    'as' => 'event.update'
]);
Route::get('/events/destroy/{id}', [
    'uses' => 'EventsController@destroy',
    'as' => 'event.delete'
]);
//Authorization
Route::get('/login', [
    'uses' => 'Auth\LoginController@index',
    'as' => 'user.login'
]);
Route::post('/login', [
    'uses' => 'Auth\LoginController@login',
    'as' => 'login'
]);
