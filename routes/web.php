<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('/users', 'UserController', [
        'names' => [
            'index' => 'users',
            'create' => 'users.create',
            'store' => 'users.store',
            'show' => 'users.show',
            'edit' => 'users.edit',
            'update' => 'users.update',
            'destroy' => 'users.destroy'
        ]
    ]);

    Route::resource('/datas', 'DataController', [
        'names' => [
            'index' => 'datas',
            'create' => 'datas.create',
            'store' => 'datas.store',
            'show' => 'datas.show',
            'edit' => 'datas.edit',
            'update' => 'datas.update',
            'destroy' => 'datas.destroy'
        ]
    ]);
});


Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);
