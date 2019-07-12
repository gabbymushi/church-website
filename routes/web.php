<?php
use App\Http\Controllers\HomeController;

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
Route::get('/','HomeController@index')->name('home');
Route::get('/about-us','HomeController@aboutUs');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Blog routes;
Route::resource('/blog','BlogController');
Route::post('/blog','BlogController@create');
Route::get('/blog/{id}','BlogController@index')->name('post');
Route::get('/dashboard',[
    'uses'=>'HomeController@dashboard',
    'as'=>'dashboard.home'
    ]);
    
    Route::get('/users',[
    'uses'=>'HomeController@users',
    'as'=>'users'
    ]);