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
    'as'=>'dashboard'
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

//Events front View controller
Route::get('all_events',[
'uses'=>'EventsController@all_events',
'as'=>'all_events'
]);
Route::get('/single_event/{slug}',[
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
'as'=>'event_category.delete']);
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

Route::post('/logout', [
    'uses' => 'Auth\LoginController@logout',
    'as' => 'logout'
]);
Route::get('/login', [
    'uses' => 'Auth\LoginController@index',
    'as' => 'user.login'
]);
Route::post('/login', [
    'uses' => 'Auth\LoginController@login',
    'as' => 'login'
]);
Route::post('staff/update/{id}',[
'uses'=>'StaffController@update',
'as'=>'update.staff'
]);
//Ministries routes
Route::get('ministry',[
'uses'=>'MinistryController@index',
'as'=>'ministry'
]);
Route::get('ministry/create',[
'uses'=>'MinistryController@create',
'as'=>'ministry.create'
]);
Route::post('ministry/',[
'uses'=>'MinistryController@store',
'as'=>'ministry.store'
]);
Route::get('ministry/{slug}/edit',[
'uses'=>'MinistryController@edit',
'as'=>'ministry.edit'
]);
Route::get('ministry/{id}/delete',[
'uses'=>'MinistryController@destroy',
'as'=>'ministry.delete'
]);
Route::get('ministry/{slug}',[
'uses'=>'MinistryController@show',
'as'=>'ministry.show'
]);
Route::post('ministry/update/{id}',[
'uses'=>'MinistryController@update',
'as'=>'ministry.update'
]);
//Ministries routes
Route::get('sermon',[
'uses'=>'SermonController@index',
'as'=>'sermon'
]);
Route::get('sermon/create',[
'uses'=>'SermonController@create',
'as'=>'sermon.create'
]);
// Route::post('ministry/',[
// 'uses'=>'SermonController@store',
// 'as'=>'ministry.store'
// ]);
// Route::get('ministry/{slug}/edit',[
// 'uses'=>'SermonController@edit',
// 'as'=>'ministry.edit'
// ]);
// Route::get('ministry/{id}/delete',[
// 'uses'=>'SermonController@destroy',
// 'as'=>'ministry.delete'
// ]);
// Route::get('ministry/{slug}',[
// 'uses'=>'SermonController@show',
// 'as'=>'ministry.show'
// ]);
// Route::post('ministry/update/{id}',[
// 'uses'=>'SermonController@update',
// 'as'=>'ministry.update'
// ]);
