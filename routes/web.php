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
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('sphome','ProvidersController@list') ;

//SP'S VIEWS
Route::view('sphome','sp.sphome');
Route::view('individualreg','sp.individualreg');
Route::view('groupreg','sp.groupreg');
Route::view('accommodationreg','sp.accommodationreg');
Route::view('diningreg','sp.diningreg');

//INDIVIDUALSERVICE...@fxn name in controller
Route::get('individualreg','IndividualServiceController@createIndividualService') ;
Route::post('individualreg','IndividualServiceController@store') ;

/*Route::get('sp', 'GroupsController@index');
 
Route::get('sp/groupreg', 'GroupsController@create');
 
Route::get('sp/{id}', 'GroupsController@show');*/

//GROUPS
Route::resource('groups','GroupsController');
Route::get('groups', 'GroupsController@index');
 
Route::get('groups/create', 'GroupsController@create');
 
//Route::get('groups/{id}', 'GroupsController@show');
Route::view('create','groups.create');

Route::post('groups', 'GroupsController@store');

Route::get('groups.show', 'GroupsController@show');

/*Route::view('show','groups.show');

Route::get('/groups/show', 'GroupsController@show');
Route::post('/groups/show', 'GroupsController@show');
*/

Route::resource('individualsp','IndividualspController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
