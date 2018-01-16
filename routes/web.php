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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'IndexController@index');
Route::get('/my_records', 'IndexController@my_records');
Route::get('/my_records/update/{record}', 'IndexController@update');
Route::get('/my_records/add_record', function() {
	if(Auth::check()) {
		return view('add');
	}
	else{
		return redirect('/login');
	}
});
Route::post('/my_records/add_record', 'IndexController@add_base');
Route::post('/my_records/update/{record}', 'IndexController@update_base');
Route::delete('/my_records/delete/{record}', 'IndexController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth');