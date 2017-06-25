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



Route::get('/admin/logout', function () {
    Auth::logout();
    return redirect('/home');
});


Route::resource('user','Admin\userController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@index')->name('home');
Route::put('/admin', 'HomeController@update')->middleware('auth');
Route::get('/admin/head_img', 'HomeController@head_img'); //管理轮播图
Route::put('/admin/head_img', 'HomeController@uphead_img');//管理轮播图
Route::get('/admin/product', 'HomeController@product'); //业务范围
Route::put('/admin/product', 'HomeController@upproduct');//业务范围



Route::get('/', 'FrontController@index');


Route::group(['middleware'=>'auth','namespace'=>'Admin'],function (){
    Route::resource('jd_account','Jd_accountController');
    Route::resource('goods','GoodsController');
    Route::resource('tag','TagController');
    Route::resource('scalp_order','Scalp_orderController');
    Route::resource('evaluate','EvaluateController');
    Route::resource('customer','CustomerController');
    Route::resource('customer_order','Customer_orderController');
    Route::resource('area','AreaController');
    Route::resource('article','ArticleController');
//    Route::resource('user','userController');



    Route::get('article/add_son/{$id}','ArticleController@add_son');
    Route::post('article/add_son/{$id}','ArticleController@store_son');


});


