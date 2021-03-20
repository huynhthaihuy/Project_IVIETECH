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
    return view('index');
});
Route::get('/trangchu',function(){
    return view('Page.trangchu');
});
Route::get('/lienhe',function(){
    return view('Page.lienhe');
});
Route::get('/dang-nhap','PageController@Login')->name('users.login');
Route::post('/dang-nhap', 'PageController@postLogin')->name('users.postlogin');
Route::get('/{slug}', function () {
    return view('index');
});

Route::get('/articles/{id}/edit', function ($id) {
    return view('index', compact('id'));
});

Route::get('/index','PageController@index')->name('users.index');
Route::get('/loai-san-pham','PageController@loaisanpham')->name('users.category');
Route::get('/chi-tiet-san-pham','PageController@chitiet')->name('users.detail');
// Route::get('/lien-he','PageController@lienhe')->name('users.contact');
Route::get('/add-to-cart','PageController@AddtoCart')->name('users.add');
Route::get('/delete-cart','PageController@DelCart')->name('users.delcart');
Route::get('/admincontrol','PageController@adminControl')->name('users.admincontrol');
Route::get('dat-hang',[
    'as' => 'dathang',
    'uses'=>'PageController@getCheckout']);
Route::post('dat-hang',[
    'as' => 'dathang',
    'uses'=>'PageController@postCheckout']);
Route::get('/dang-nhap','PageController@Login')->name('users.login');
Route::post('/dang-nhap', 'PageController@postLogin')->name('users.postlogin');
Route::get('/dang-ky','PageController@SignUp')->name('users.signup');
Route::post('/dang-ki', 'PageController@Store')->name('users.store');
Route::get('/dang-xuat','PageController@Logout')->name('users.logout');
Route::get('admin/routes', 'PageController@Login')->middleware('admin');
Route::get('/search','PageController@Search')->name('users.search');
//Auth::routes();

Route::get('/home', 'HomeController@index');

