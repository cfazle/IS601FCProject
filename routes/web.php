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

Route::get('/', 'HomeController@home')->name("index");

Route::get('/about','HomeController@about' )->name("about");


Route::get('/contact','HomeController@contact' )->name("contact");

Route::post('/contact','HomeController@store' )->name("contact.store");

Route::get('/thanks{name}', 'HomeController@thanks' )->name("thanks");

/*Route::post('/contact', function () {
    $data = request() ->all();
    echo "Email: ".$data['email'].'<br>';
    echo "Message: ".$data['message'];
}); */

/*Route::get('/signup', function () {
    return view('pages.signup');
});

Route::get('/signin', function () {
    return view('pages.signin');
});*/

Route::get('/viewmessages', function () {
    return view('pages.viewmessages');
});
/*
Route::get('/logout', function () {
    return view('pages.logout');
});

Route::get('/card', function () {
    return view('pages.card');
});

*/

Auth::routes();

Route::get('/index', 'HomeController@index')->name('pages.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
