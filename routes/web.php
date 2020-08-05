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



// Operator Routes
Route::Resource('operator', 'OperatorController');

//  Flight Route
Route::Resource('flight','FlightController');

//  Region Route
Route::Resource('region','RegionController');

//  Sub Region Route
Route::Resource('sub-region','Sub_RegionController');

Route::get('/home', 'HomeController@index')->name('home');

//flight Schedule
Route::Resource('flight-schedule','FlightScheduleController');

Route::get('/showregion', ['as'=> 'showregion' , 'uses' =>'FlightScheduleController@showRegion']);

Route::get('/showOperator', ['as'=> 'showOperator' , 'uses' =>'FlightScheduleController@showOperator']);

Route ::resource('/admin/users', 'Admin\UsersController', ['except' => ['show', 'create', 'store']]);

Route ::namespace('Admin') -> prefix('admin')-> name('admin.')->middleware('can:manage.users')-> group(function(){
	Route ::resource('/admin/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});

Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
