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



//route without controller & view
Route::get('/', function () {
	return 'Hello World';
});

//route with view
Route::get('/view', function () {
	return view('home.index');
});

//route with required param
Route::get('/view/required/{id}', function ($id) {
	return 'User '.$id;
});

//route with optional param
Route::get('/view/optional/{id?}', function ($id=0) {
	return 'User '.$id;
});

//route with param than pass to view
Route::get('/view/data/{id?}', function ($id=0) {
	return view('home.index',['id'=>$id]);
});

//route with param than pass to view
Route::get('/view/index/{id?}', 'SampleController@view');

