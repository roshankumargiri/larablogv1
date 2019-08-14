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
// Use View;


Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
//Route::get('/about', 'HomeController@about');
Route::resource('/categories','CategoryController');
Route::get('/categories/{id}/delete', 'CategoryController@destroy');
Route::resource('/blogs','BlogController');
Route::get('/blogs/{id}/delete', 'BlogController@destroy');

Route::get('/test',function(){
	return view('test');
});


Route::resource('/users', 'UserController');
Route::get('/users/{id}/delete', 'UserController@destroy');


	// View::composer(['layouts.app'], function($view){
	// 	$categories = Category::all();
 //       	$view ->with('categories',$categories);
 //   	});


// View::composer('*', function ($view) {
// 	$user = Auth::user();
// 	$view -> with('user',$user);
// 	});

// View::composer('*', function ($view) {
//     $user = Auth::user();
// 	$view -> with('user',$user);
// });





