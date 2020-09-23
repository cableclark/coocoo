<?php
use Illuminate\Support\Facades\Route;
use App\Coocoo;

Route::get('/', function () {
        return view('index');
    });
Route::get('/home', 'HomeController@index')->name("UserHome");

Route::get('/user/{name}', 'UserController@show')->name("User");

Route::group(['middleware' => 'auth'], function () {

    Route::get('/coocoos', 'CoocoosController@index')->name('SaveCoocoos');

    Route::get('/coocoos/create', 'CoocoosController@create');

    Route::get('/coocoos/{id}', 'CoocoosController@show')->name('coocoo.show');

    Route::post('/coocoos/store', 'CoocoosController@save');

    Route::delete('/coocoos/', 'CoocoosController@destroy');

    Route::post('/follow', 'FollowingsController@save');

    Route::delete('/follow/{userid}', 'FollowingsController@destroy');

    Route::post('/likes/store', 'LikesController@save');

    Route::delete('/likes/', 'LikesController@delete');

    Route::post('/comments/store', 'CommentsController@save');

    Route::get('/explore', function () {

        $coocoos = Coocoo::orderBy('created_at', 'desc')->paginate(10);

        return view('user.explore', compact('coocoos'));

    });
});




Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

