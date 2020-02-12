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
Route::get('/horor', function () {
    return view('frontend.horor');
});
Route::get('/humoris', function () {
    return view('frontend.humoris');
});
Route::get('/romantis', function () {
    return view('frontend.romantis');
});
Route::get('/pendidikan', function () {
    return view('frontend.pendidikan');
});
Route::get('/persahabatan', function () {
    return view('frontend.persahabatan');
});
Route::get('/keluarga', function () {
    return view('frontend.keluarga');
});
Route::get('/religi', function () {
    return view('frontend.religi');
});
Route::get('/motivasi', function () {
    return view('frontend.motivasi');
});
Route::get('/nasihat', function () {
    return view('frontend.nasihat');
});
Route::get('/mengharukan', function () {
    return view('frontend.mengharukan');
});
// Route::get('/register', function () {
//     return view('frontend.register');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>['auth']],
function () {

    route::resource('kategori','KategoriController');
    route::resource('penulis','PenulisController');
    route::resource('cerpen','CerpenController');
}
);
