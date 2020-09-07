<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Coocoo;

Route::get('/', function () {

    $coocoos = Coocoo::all();

    return view('welcome', compact('coocoos'));

});


Route::get('/home', 'HomeController@index')->name("CoocoosHome");


Route::group(['middleware' => 'auth'], function () {
    Route::get('/coocoos', 'CoocoosController@index')->name('SaveCoocoos');

    Route::get('/coocoos/create', 'CoocoosController@create');

    Route::post('/coocoos/store', 'CoocoosController@save');

    Route::delete('/coocoos/{id}', 'CoocoosController@destroy');

    Route::post('/follow', 'FollowsController@save');

    Route::delete('/follow/{userid}', 'FollowsController@destroy');
});


Route::get('/user/{name}', 'UserController@show')->name("User");



Auth::routes();

