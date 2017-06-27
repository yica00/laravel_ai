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


    Route::group(['as'=>'front'],function (){
        Route::get('about_us','FrontController@about_us');
        Route::get('team','FrontController@team');
        Route::get('team/{id}','FrontController@team_detail');
        Route::get('honor','FrontController@honor');
        Route::get('enterprise','FrontController@enterprise');
        Route::get('parenting','FrontController@parenting');
        Route::get('cs','FrontController@cs');
        Route::get('camp','FrontController@camp');
        Route::get('training','FrontController@training');
        Route::get('base_xisan','FrontController@base_xisan');
        Route::get('base_qingshan','FrontController@base_qingshan');
        Route::get('base_guoleyuan','FrontController@base_guoleyuan');
        Route::get('case','FrontController@our_case');
        Route::get('plan','FrontController@plan');
        Route::get('plan/{id}','FrontController@plan_detail');
        Route::get('contact','FrontController@contact');

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

    Route::get('/', 'FrontController@index');



    Route::group(['middleware'=>'auth','namespace'=>'Admin','prefix'=>'admin'],function (){
        Route::resource('article','ArticleController');
        Route::resource('team','TeamController');


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

    });

});


