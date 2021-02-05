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


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:edit-users')->group(function(){
    Route::resource('/user', 'UserController', ['except' => ['show', 'create', 'store']]);

    
    Route::get('/classroom/{classroom}/edit', 'ClassroomController@edit')->name('classroom.edit');
    Route::delete('/classroom/destroy/{classroom}', 'ClassroomController@destroy')->name('classroom.destroy');
    Route::put('/classroom/update/{classroom}', 'ClassroomController@update')->name('classroom.update');
    Route::post('/classroom/create', 'ClassroomController@store')->name('classroom.store');
    Route::get('/classroom/create', 'ClassroomController@create')->name('classroom.create');
});

Route::get('/admin/classroom', 'Admin\ClassroomController@index')->name('classroom.index');




