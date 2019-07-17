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

// Route::get('/single_event1/', function () {
//     return view('events.single_event');
// });
Route::get('/','HomeController@index')->name('home');
Route::get('/about-us','HomeController@aboutUs');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Blog routes;
Route::resource('/blog','BlogController');
Route::get('/post/blog','BlogController@create');
Route::get('/blog/{id}','BlogController@index')->name('post');
Route::get('/dashboard',[
    'uses'=>'HomeController@dashboard',
    'as'=>'dashboard.home'
    ]);
    
    Route::get('/users',[
    'uses'=>'HomeController@users',
    'as'=>'users'
    ]);

//Events Routes
Route::get('/events',[
'uses'=>'EventsController@index',
'as'=>'events'
]);
Route::get('/events/create',[
 'uses'=>'EventsController@create',
 'as'=>'event.create'
]);
Route::post('/events/store',[
'uses'=>'EventsController@store',
'as'=>'event.store'
]);
Route::get('/events/edit/{id}',[
'uses'=>'EventsController@edit',
'as'=>'event.edit'
]);

Route::post('/events/update/{id}',[
'uses'=>'EventsController@update',
'as'=>'event.update'
]);
Route::get('/events/destroy/{id}',[
'uses'=>'EventsController@destroy',
'as'=>'event.delete'
]);

//Events front View controller
Route::get('all_events',[
'uses'=>'EventsController@all_events',
'as'=>'all_events'
]);
Route::get('/single_event/{id}',[
'uses'=>'EventsController@show',
'as'=>'single_event'

]);

//route Event category
Route::get('/events/category',[
'uses'=>'EventsCategoryController@index',
'as'=>'event_categories'
]);
Route::get('/events/category_create',[
'uses'=>'EventsCategoryController@create',
'as'=>'event_category.create'
]);
Route::post('/events/category_store',[
'uses'=>'EventsCategoryController@store',
'as'=>'events_category.store'
]);

Route::get('/events/category_delete/{id}',[
'uses'=>'EventsCategoryController@destroy',
'as'=>'event_category.delete'
]);