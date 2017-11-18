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

//        Route::get('/','FrontController@index');

        Route::get('about','FrontController@about');
        Route::get('about/culture','FrontController@culture');
        Route::get('about/video','FrontController@video');
        Route::get('about/video/{id}','FrontController@video_detail');
        Route::get('about/honor','FrontController@honor');
        Route::get('about/env','FrontController@env');
        Route::get('about/contact','FrontController@contact');

        Route::get('order','FrontController@offer');

        Route::get('brand','FrontController@brand');

        Route::get('news','FrontController@news');
        Route::get('news/category/{id}','FrontController@news');
        Route::get('news/{id}','FrontController@new_detail');

        Route::get('treatment','FrontController@treatment');

        Route::get('item','FrontController@items');
        Route::get('item/{id}','FrontController@items');
        Route::get('item/category/{id}','FrontController@items');

        Route::get('store','FrontController@store_list');
        Route::get('about/store/{id}','FrontController@store_dedail');

        Route::get('star','FrontController@star');
        Route::get('star/{id}','FrontController@star_dedail');

        Route::get('about/compus','FrontController@compus');
        Route::get('about/compus/{id}','FrontController@compus');

        Route::get('work','FrontController@work');
        Route::get('work/{id}','FrontController@work_dedail');

        Route::get('active','FrontController@active_list');
        Route::get('active/{id}','FrontController@active_dedail');

        Route::get('join','FrontController@join_detail');
        Route::get('join/category/{id}','FrontController@join_detail');
        Route::get('join/suply','FrontController@join_suply');


        Route::get('case','FrontController@our_case');
        Route::get('case/{hid}/{sid}','FrontController@our_case');
//        Route::get('case/category/{id}','FrontController@our_case');
        Route::get('case/{id}','FrontController@case_detail');
        Route::get('item_case/{id}','FrontController@item_case');

        Route::get('team','FrontController@team');
        Route::get('/team/design','FrontController@team_design');
        Route::get('team/supervise','FrontController@team_supervise');
        Route::get('team/{id}','FrontController@team_detail');
        Route::get('worker/{id}','FrontController@worker_detail');

        Route::get('quality','FrontController@quality');
        Route::get('quality/category/{id}','FrontController@quality');

        Route::get('project','FrontController@project');
        Route::get('project/{id}','FrontController@project_detail');

        Route::get('question/{id}','FrontController@question_detail');

        Route::get('product','FrontController@product');
        Route::get('product/category/{id}','FrontController@product');
        Route::get('product/{id}','FrontController@product_detail');

        Route::get('guide','FrontController@guide');
        Route::get('guide/category/{id}','FrontController@guide');
        Route::get('guide/{id}','FrontController@guide_detail');

        Route::get('service','FrontController@service');
        Route::get('service/category/{id}','FrontController@service');

        Route::get('budge','FrontController@budge');


        Route::get('contact','FrontController@contact');
        Route::get('contact/way','FrontController@way');
        Route::get('contact/message','FrontController@message');

        Route::post('/front/message','Admin\MessageController@store');
        Route::any('/search','FrontController@search');

        Route::group(['as'=>'front','middleware'=>'get_nav','prefix'=>'wap'],function (){
            Route::get('/','WapController@index');

            Route::get('about','WapController@about');
            Route::get('about/culture','WapController@culture');

            Route::get('item','WapController@items');
            Route::get('item/{id}','WapController@items');
            Route::get('item/detail/{id}','WapController@item_detail');

            Route::get('teacher','WapController@team');
            Route::get('team/{id}','WapController@team_detail');
            Route::get('tcompus/{id}','WapController@team_compus');

            Route::get('star','WapController@star');
            Route::get('star/{id}','WapController@star_dedail');

            Route::get('work','WapController@work');
            Route::get('work/{id}','WapController@work_dedail');

            Route::get('news','WapController@news');
            Route::get('news/{id}','WapController@new_detail');

            Route::get('about','WapController@about');
            Route::get('culture','WapController@culture');
            Route::get('video','WapController@video');
            Route::get('video/{id}','WapController@video_detail');
            Route::get('compus','WapController@compus');
            Route::get('compus/{id}','WapController@compus');

            Route::get('contact','WapController@contact');

        });

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
        Route::resource('rcase','RcaseController');


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
        Route::get('/admin/rcase/{id}/delete','RcaseController@destroy');
        Route::get('/admin/order_list/{id}/delete','Order_listController@destroy');
    });

});

Route::any('/register',function (){
    return null;
});

Route::get('/vaptcha',function (){
    return getCaptcha(4);
});


Route::group(['middleware'=>'check_setting'],function (){
    Route::group(['as'=>'front','middleware'=>'get_nav'],function () {
        Route::get('/home', 'FrontController@index');
        Route::get('/', function () {
            return view('front.index');
        });
    });
});