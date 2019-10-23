<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('first_home');
});
//Route::get('/','LoginController@first');






Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/sign_in', 'HomeController@sign_in');
Route::get('/login_in', function () {
    return view('login_in');
});

Route::post('/login','LoginController@login');
Route::get('/log_out','LoginController@log_out');
//Route::post('/register','RegController@register');
Route::post('getmsg','LoginController@getmsg');
Route::get('/survey', function () {
    return view('survey');
});

Route::post('/page/do-ajax', 'HomeController@do_ajax');
//Route::post('dynamic_dependent/fetch','HomeController@do_ajax')->name('dynamicdependent.fetch');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
