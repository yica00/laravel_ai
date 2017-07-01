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

//        Route::get('/', function (){
//            return view('admin.index');
//        });

        Route::get('/', 'FrontController@index');

        Route::get('about','FrontController@about');
        Route::get('culture','FrontController@culture');

        Route::get('driver','FrontController@driver');
        Route::get('process','FrontController@process');

        Route::get('training','FrontController@training');
        Route::get('service_training','FrontController@service_training');
;
        Route::get('models','FrontController@models');
        Route::get('cars','FrontController@cars');

        Route::get('didi','FrontController@didi');

        Route::get('teacher','FrontController@teacher');
        Route::get('teacher/{id}','FrontController@teacher_detail');

        Route::get('service','FrontController@service');
        Route::get('promise','FrontController@promise');
        Route::get('scence','FrontController@scence');


        Route::get('contact','FrontController@contact');
        Route::get('way','FrontController@contact_way');

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
    });

});


