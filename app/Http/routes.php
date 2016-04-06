<?php

Route::get('/', function () {
    return view('register');
});

Route::auth();

Route::post('students', 'StudentsController@store');

Route::get('/home', 'HomeController@index');
