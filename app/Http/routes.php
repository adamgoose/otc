<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('register');
});

Route::post('students', 'StudentsController@store');