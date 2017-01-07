<?php

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('admins/login', 'AdministratorsController@showLoginForm');

Route::post('admins/login', 'AdministratorsController@login');

Route::get('admins/dashboard', 'AdministratorsController@secret');
