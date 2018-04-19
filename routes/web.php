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


	$tasks = DB::table('task')->latest()->get();
	
	//return $tasks;

    return view('welcome', compact('tasks'));

});


Route::get('/task/{id}', function ($id) {
//		dd($id);

	$task = DB::table('task')->find($id);
	
	//dd($task);

    return view('task.show', compact('task'));

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
