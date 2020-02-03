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
    return view('frontend.index');
});
// Route::get('/index', function () {
//     return view('frontend.index');
// });
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/kontak', function () {
    return view('frontend.kontak');
});
Route::get('/login', function () {
    return view('frontend.login');
});
Route::get('/register', function () {
    return view('frontend.register');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['prefix'=>'backend', 'middleware'=>['auth']], function(){
//     Route::resource('/home', 'backendController');
// });

Route::group(['prefix'=>'admin','middleware'=>['auth']],
function () {

    route::resource('kategori','KategoriController');
    route::resource('penulis','PenulisController');
}
);
