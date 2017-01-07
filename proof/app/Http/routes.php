<?php

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/empresas', 'HomeBusinessController@index');

Route::get('admins/login', 'AdministratorsController@showLoginForm');

Route::post('admins/login', 'AdministratorsController@login');

Route::get('admins/dashboard', 'AdministratorsController@secret');

Route::get('/postulantes', 'HomeApplicantsController@index');

Route::get('postulantes/login', 'ApplicantsController@showLoginForm');

Route::post('postulantes/login', 'ApplicantsController@login');

Route::get('postulantes/dashboard', 'ApplicantsController@secret');
