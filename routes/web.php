<?php

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
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});


Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/contact', function () {
    $data = request() ->all();
    echo "Email: ".$data['email'].'<br>';
    echo "Message: ".$data['message'];
});

Route::get('/signup', function () {
    return view('pages.signup');
});

Route::get('/signin', function () {
    return view('pages.signin');
});

Route::get('/viewmessages', function () {
    return view('pages.viewmessages');
});

Route::get('/logout', function () {
    return view('pages.logout');
});

Route::get('/card', function () {
    return view('pages.card');
});

Auth::routes();

Route::get('/index', 'HomeController@index')->name('pages.index');
