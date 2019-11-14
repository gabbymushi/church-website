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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/about-us', 'HomeController@aboutUs');
Route::get('/dme-history','HomeController@dme_history')->name('dme.history');
Route::get('/dme-mission','HomeController@dme_mission')->name('dme.mission');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Blog routes;
Route::resource('/blog', 'BlogController');
Route::get('/post/blog', 'BlogController@create');
Route::get('/blog/{id}', 'BlogController@index')->name('post');
Route::get('/dashboard', [
    'uses' => 'HomeController@dashboard',
    'as' => 'dashboard'
]);
Route::get('/manage/blog', 'BlogController@manage')->name('blog.manage');
Route::get('/dashboard', [
    'uses' => 'HomeController@dashboard',
    'as' => 'dashboard'
]);
Route::get('/news/{id}/edit/',[
'uses'=>'BlogController@edit',
'as'=>'news.edit'
]);
Route::post('/news/update/{id}',[
'uses'=>'BlogController@update',
'as'=>'news.update'
]);
Route::get('/news/{id}/delete',[
'uses'=>'BlogController@destroy',
'as'=>'news.delete'
]);
Route::get('/users', [
    'uses' => 'HomeController@users',
    'as' => 'users'
]);

Route::get('/users', [
    'uses' => 'HomeController@allGallery',
    'as' => 'gallery.all'
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

//Events front View controller
Route::get('all_events', [
    'uses' => 'EventsController@all_events',
    'as' => 'all_events'
]);
Route::get('/single_event/{slug}', [
    'uses' => 'EventsController@show',
    'as' => 'single_event'

]);

//route Event category
Route::get('/events/category', [
    'uses' => 'EventsCategoryController@index',
    'as' => 'event_categories'
]);
Route::get('/events/category_create', [
    'uses' => 'EventsCategoryController@create',
    'as' => 'event_category.create'
]);
Route::post('/events/category_store', [
    'uses' => 'EventsCategoryController@store',
    'as' => 'events_category.store'
]);

Route::get('/events/category_delete/{id}', [
    'uses' => 'EventsCategoryController@destroy',
    'as' => 'event_category.delete'
]);
Route::get('/events/calender', [
    'uses' => 'EventsController@eventsCalender',
    'as' => 'events.calender'
]);

//Contact Us Routes
Route::get('/contactus', [
    'uses' => 'ContactUsController@index',
    'as' => 'contactus'
]);

//Downloads Templates
Route::get('/downloads',[
  'uses' => 'DownloadsController@index',
  'as' => 'downloads'
]);
Route::get('/downloads/create',[
  'uses' => 'DownloadsController@create',
  'as' => 'download.create'
]);

Route::post('/document/store',[
  'uses' => 'DownloadsController@store',
  'as' => 'download.store'
]);
Route::get('/document/{id}/edit/',[
'uses'=>'DownloadsController@edit',
'as'=>'document.edit'
]);
Route::post('/document/update/{id}',[
'uses'=>'DownloadsController@update',
'as'=>'document.update'
]);
Route::get('/document/{id}/delete',[
'uses'=>'DownloadsController@destroy',
'as'=>'document.delete'
]);
//Staff routes
Route::get('/all/staff', [
    'uses' => 'StaffController@index',
    'as' => 'all.staff'
]);
Route::get('create/staff', [
    'uses' => 'StaffController@create',
    'as' => 'create.staff'
]);
Route::post('store/staff', [
    'uses' => 'StaffController@store',
    'as' => 'store.staff'
]);
Route::get('manage/staff', [
    'uses' => 'StaffController@manage',
    'as' => 'manage.staff'
]);
Route::get('/staff/edit/{id}', [
    'uses' => 'StaffController@edit',
    'as' => 'staff.edit'
]);
Route::get('/staff/destroy/{id}', [
    'uses' => 'StaffController@destroy',
    'as' => 'staff.destroy'
]);

Route::get('/logout', [
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
Route::post('staff/update/{id}', [
    'uses' => 'StaffController@update',
    'as' => 'update.staff'
]);
//Ministries routes
Route::get('ministry', [
    'uses' => 'MinistryController@index',
    'as' => 'ministry'
]);
Route::get('ministry/create', [
    'uses' => 'MinistryController@create',
    'as' => 'ministry.create'
]);
Route::post('ministry/', [
    'uses' => 'MinistryController@store',
    'as' => 'ministry.store'
]);
Route::get('ministry/{slug}/edit', [
    'uses' => 'MinistryController@edit',
    'as' => 'ministry.edit'
]);
Route::get('ministry/{id}/delete', [
    'uses' => 'MinistryController@destroy',
    'as' => 'ministry.delete'
]);
Route::get('ministry/{slug}', [
    'uses' => 'MinistryController@show',
    'as' => 'ministry.show'
]);
Route::post('ministry/update/{id}', [
    'uses' => 'MinistryController@update',
    'as' => 'ministry.update'
]);
//Majimbo Routes
Route::get('/majimbo',[
'uses'=>'JimboController@index',
'as'=>'manage.jimbo'
]);
Route::get('/jimbo/create',[
'uses'=>'JimboController@create',
'as'=>'jimbo.create'
]);
Route::post('/jimbo/store',[
'uses'=>'JimboController@store',
'as'=>'jimbo.store'
]);
Route::get('/jimbo/{id}/edit/',[
'uses'=>'JimboController@edit',
'as'=>'jimbo.edit'
]);
Route::post('/jimbo/update/{id}',[
'uses'=>'JimboController@update',
'as'=>'jimbo.update'
]);
Route::get('/jimbo/{id}/delete',[
'uses'=>'JimboController@destroy',
'as'=>'jimbo.delete'
]);
Route::get('/jimbo/show/{slug}',[
'uses'=>'JimboController@show',
'as'=>'jimbo.show'
]);
//Sharika routes
Route::get('/sharika',[
'uses'=>'SharikaController@index',
'as'=>'sharika'
]);
Route::get('/sharika/create',[
'uses'=>'SharikaController@create',
'as'=>'sharika.create'
]);
Route::post('/sharika/store',[
'uses'=>'SharikaController@store',
'as'=>'sharika.store'
]);
Route::get('/usharika/{id}/edit',[
'uses'=>'SharikaController@edit',
'as'=>'usharika.edit'
]);
Route::post('/usharika/update/{id}',[
'uses'=>'SharikaController@update',
'as'=>'sharika.update'
]);

Route::get('/usharika/{id}/delete',[
'uses'=>'SharikaController@destroy',
'as'=>'usharika.destroy'
]);

Route::get('/usharika/show/{id}/{slug}',[
'uses'=>'SharikaController@show',
'as'=>'usharika.show'
]);
//Mitaa Routes
Route::get('/mitaa',[
'uses'=>'MtaaController@index',
'as'=>'mitaa'
]);
Route::get('/mtaa/create',[
'uses'=>'MtaaController@create',
'as'=>'mtaa.create'
]);
Route::post('/mtaa/store',[
'uses'=>'MtaaController@store',
'as'=>'mtaa.store'
]);
Route::get('/mtaa/{id}/edit',[
'uses'=>'MtaaController@edit',
'as'=>'mtaa.edit'
]);
Route::post('/mtaa/update/{id}',[
'uses'=>'MtaaController@update',
'as'=>'mtaa.update'
]);

Route::get('/mtaa/{id}/delete',[
'uses'=>'MtaaController@destroy',
'as'=>'mtaa.destroy'
]);
Route::get('/mtaa/show/{id}',[
'uses'=>'MtaaController@show',
'as'=>'mtaa.show'
]);
//Sermon routes
Route::get('sermon', [
    'uses' => 'SermonController@index',
    'as' => 'sermon'
]);
Route::get('sermon/create', [
    'uses' => 'SermonController@create',
    'as' => 'sermon.create'
]);
Route::post('sermon/', [
    'uses' => 'SermonController@store',
    'as' => 'sermon.store'
]);
Route::get('sermon/{id}/edit', [
    'uses' => 'SermonController@edit',
    'as' => 'sermon.edit'
]);
Route::get('sermon/{id}/delete',[
'uses'=>'SermonController@destroy',
'as'=>'sermon.delete'
]);
Route::get('sermon/{slug}/view',[
'uses'=>'SermonController@show',
'as'=>'sermon.show'
]);
Route::post('sermon/update/{id}',[
'uses'=>'SermonController@update',
'as'=>'sermon.update'
]);
Route::get('sermon/all',[
'uses'=>'SermonController@allSermons',
'as'=>'sermon.all'
]);

//Church Projects Routes
Route::get('/projects','ProjectsController@index')->name('projects');
Route::get('/projects/show','ProjectsController@show')->name('projects.show');

//Projects Routes
Route::get('/projects/manage',[
'uses'=>'ProjectsController@manage',
'as'=>'projects.manage'
]);
Route::get('/project/create',[
'uses'=>'ProjectsController@create',
'as'=>'project.create'
]);
Route::post('/project/store',[
'uses'=>'ProjectsController@store',
'as'=>'project.store'
]);
Route::get('/project/{id}/edit/',[
'uses'=>'ProjectsController@edit',
'as'=>'project.edit'
]);
Route::post('/project/update/{id}',[
'uses'=>'ProjectsController@update',
'as'=>'project.update'
]);
Route::get('/project/{id}/delete',[
'uses'=>'ProjectsController@destroy',
'as'=>'project.delete'
]);
Route::get('/project/show/{id}/{slug}',[
'uses'=>'ProjectsController@show',
'as'=>'project.show'
]);


//Church Departments
Route::get('/departments/manage',[
'uses'=>'DepartmentsController@index',
'as'=>'departments.manage'
]);
Route::get('/department/create',[
'uses'=>'DepartmentsController@create',
'as'=>'department.create'
]);
Route::post('/department/store',[
'uses'=>'DepartmentsController@store',
'as'=>'department.store'
]);
Route::get('/department/{id}/edit/',[
'uses'=>'DepartmentsController@edit',
'as'=>'department.edit'
]);
Route::post('/department/update/{id}',[
'uses'=>'DepartmentsController@update',
'as'=>'department.update'
]);
Route::get('/department/{id}/delete',[
'uses'=>'DepartmentsController@destroy',
'as'=>'department.delete'
]);
Route::get('/department/show/{id}/{slug}',[
'uses'=>'DepartmentsController@show',
'as'=>'department.show'
]);