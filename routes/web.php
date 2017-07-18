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

Route::group(['middleware'=>'check_setting'],function (){


    Route::group(['as'=>'front','middleware'=>'get_nav'],function (){
//    Route::group(['as'=>'front'],function (){

        Route::get('/','FrontController@index');

        Route::get('about','FrontController@about');
        Route::get('culture','FrontController@culture');
        Route::get('organization','FrontController@organization');
        Route::get('speech','FrontController@speech');
        Route::get('history','FrontController@history');
        Route::get('team','FrontController@team');
        Route::get('honor','FrontController@honor');

        Route::get('news','FrontController@news');
        Route::get('news/{id}','FrontController@new_detail');
        Route::get('industry_news','FrontController@industry_news');
        Route::get('wikipedia','FrontController@wikipedia');

        Route::get('product','FrontController@product');
        Route::get('product/category/{id}','FrontController@product');
        Route::get('product/{id}','FrontController@product_detail');

        Route::get('equipment','FrontController@equipment');
        Route::get('equipment/{id}','FrontController@equipment_detail');

        Route::get('case','FrontController@our_case');
        Route::get('case/{id}','FrontController@case_detail');

        Route::get('brand','FrontController@brand');
        Route::get('sales_list','FrontController@sales_list');
        Route::get('sales_list/category/{id}','FrontController@sales_list');

        Route::get('service','FrontController@service');
        Route::get('service/category/{id}','FrontController@service');

        Route::get('contact','FrontController@contact');
        Route::get('way','FrontController@way');

        Route::post('/front/message','Admin\MessageController@store');
    });

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
    Route::get('/admin/setting', 'HomeController@setting'); //网站设置
    Route::put('/admin/setting', 'HomeController@do_setting');//网站设置


    Route::group(['middleware'=>'auth','namespace'=>'Admin','prefix'=>'admin'],function (){
        Route::resource('article','ArticleController');
        Route::resource('team','TeamController');
        Route::resource('message','MessageController');
        Route::resource('car','CarController');
        Route::resource('order_list','Order_listController');


        Route::get('/team/{id}/delete','TeamController@destroy');
        Route::get('/up_password','UserController@up_password');
        Route::post('/up_password','UserController@do_up_password');

    });

    Route::group(['middleware'=>'auth','namespace'=>'Admin'],function (){
        Route::get('article/add_son/{id}','ArticleController@add_son');
        Route::get('article/{id}/look','ArticleController@look_son');
        Route::get('article/{id}/addson','ArticleController@add_son');
        Route::get('article/{id}/delete','ArticleController@delete_son');
        Route::post('article/add_son/{id}','ArticleController@store_son');

        Route::get('/admin/message/{id}/look','MessageController@show');
        Route::get('/admin/message/{id}/delete','MessageController@destroy');

        Route::get('/admin/car/{id}/delete','CarController@destroy');
        Route::get('/admin/order_list/{id}/delete','Order_listController@destroy');
    });

});


