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
//    Route::resource('user','userController');

    Route::post('/evaluate/file/upload','EvaluateController@uploadFile');  //评价文件批量导入
    Route::post('jd_account/file/upload','Jd_accountController@uploadFile'); //京东账号批量导入
});

Route::group(['namespace'=>'Admin','prefix'=>'/v1/admin/'],function (){
    Route::any('search_city','AreaController@searchCity'); // 根据城市查对应编号
    Route::any('scalpable_ids/{goods_id}','GoodsController@get_scalpable_ids'); // 获取可刷账号
    Route::any('jd_accounts','Jd_accountController@cliStore');  // 添加京东账号
    Route::any('jd_accounts/{id}','Jd_accountController@cliUpdate');// 修改京东账号
});

