<?php

use Illuminate\Support\Facades\Route;
use App\Coocoo;
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

    $coocoos = Coocoo::all()->sortByDesc('created_at');

    return view('welcome', compact('coocoos'));

})->name("CoocoosHome");



Route::group(['middleware' => 'auth'], function () {
    Route::get('/coocoos', 'CoocoosController@index')->name('SaveCoocoos');

    Route::get('/coocoos/create', 'CoocoosController@create');

    Route::post('/coocoos/store', 'CoocoosController@save');

    Route::delete('/coocoos/{id}', 'CoocoosController@destroy');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
