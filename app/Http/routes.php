<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');   
 
});


//后台模块
Route::group([],function(){
	Route::get('/admin', function () {
    	return view('admins.index');   
	});
	Route::resource('/user','UserController');
	
	
});


// //前台模块
// Route::group([],function(){
	

// });

// Route::get('/test',function() {
// 	return view('tuihuanhuo');
// });

