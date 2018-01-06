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
	return "Hello World";
});

//route with view
Route::get('/view', function () {
	return view('home.index');
});

//route with required param
Route::get('/view/test-1/{id}', function ($id) {
	return 'User '.$id;
});

//route with optional param
Route::get('/view/test-2/{id?}', function ($id=null) {
	return 'User '.$id;
});

//route with param than pass to view
Route::get('/view/data/{id?}/{name?}', function ($id=0, $name='cn') {
	return view('home.index',['id'=>$id,'dname'=>$name]);
});

//route with query string
//example http://domainname/view/test?id=1&name=test
Route::get('/view/test', function (\Illuminate\Http\Request $request) {
	dd($request->all());
});

//route with controller and view
Route::get('/sample/index', 'SampleController@index');

Route::get('/sample/form', 'SampleController@form');
//route with param pass to controller and view
Route::get('/sample/view/{id?}', 'SampleController@view');

//route with query string pass to controller and view
Route::get('/sample/qView', 'SampleController@qView');

Route::resource('/book', 'BookController');




