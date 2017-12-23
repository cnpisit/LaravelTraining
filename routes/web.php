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
Route::get('/view/optional/{id?}', function ($id=null) {
	return 'User '.$id;
});

//route with param than pass to view
Route::get('/view/data/', function ($id=0, $name='cn') {
	return view('home.index',['id'=>$id,'dname'=>$name]);
});

Route::get('/view/test', function (\Illuminate\Http\Request $request) {
	dd($request->all());
});

//route with param than pass to view
Route::get('/view/index/{id?}', 'SampleController@view');

