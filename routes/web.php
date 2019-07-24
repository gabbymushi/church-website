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
Route::get('/blog/{id}','BlogController@index')->name('post');
Route::get('/dashboard',[
    'uses'=>'HomeController@dashboard',
    'as'=>'dashboard.home'
    ]);
    
Route::get('/users',[
'uses'=>'HomeController@users',
'as'=>'users'
]);

Route::get('/users',[
'uses'=>'HomeController@allGallery',
'as'=>'gallery.all'
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
Route::get('/events/calender',[
'uses'=>'EventsController@eventsCalender',
'as'=>'events.calender'
]);

//Contact Us Routes
Route::get('/contactus',[
'uses'=>'ContactUsController@index',
'as'=>'contactus'
]);

//Staff routes
Route::get('all/staff',[
'uses'=>'StaffController@index',
'as'=>'all.staff'
]);
Route::get('create/staff',[
'uses'=>'StaffController@create',
'as'=>'create.staff'
]);
Route::post('store/staff',[
'uses'=>'StaffController@store',
'as'=>'store.staff'
]);
Route::get('manage/staff',[
'uses'=>'StaffController@manage',
'as'=>'manage.staff'
]);
Route::get('/staff/edit/{id}',[
'uses'=>'StaffController@edit',
'as'=>'staff.edit'
]);
Route::get('/staff/destroy/{id}',[
'uses'=>'StaffController@destroy',
'as'=>'staff.destroy'
]);