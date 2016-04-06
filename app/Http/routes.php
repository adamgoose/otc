<?php

Route::auth();

Route::get('/', function () {
    return view('register');
});

Route::post('students', 'StudentsController@store');

Route::group(['middleware' => 'auth'], function () {

    Route::get('students', 'StudentsController@index');

    Route::resource('resources', 'ResourcesController');
});
