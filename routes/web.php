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
Route::get('session',function (){
    return 1;
});


Route::group(['middleware'=>'check_setting'],function (){


//    Route::group(['as'=>'front','middleware'=>'get_nav'],function (){

    Route::group(['as'=>'front'],function (){

        Route::get('/','FrontController@index');
        Route::get('/setting','FrontController@setting');

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


     //此处开始需要用户认证
        Route::group(['middleware'=>'CheckAuth'],function (){
            Route::get('addCart','ApiController@addCart');  //添加购物车
            Route::get('buying','ApiController@buying'); //下单
            Route::get('paying/{id}','ApiController@paying'); //下单

            Route::get('getCart','ApiController@getCart');  //获取购物车内容
            Route::get('deleteCart','ApiController@deleteCart');  //删除购物车

            Route::get('useinfo','ApiController@useinfo');  //获取个人信息
            Route::get('scoreList','ApiController@scoreList');  //获取积分列表
            Route::get('orderlist','ApiController@orderlist');  //获取积分列表

            Route::get('useFee','ApiController@useFee');  //获取用户佣金
            Route::get('feeList','ApiController@feeList');  //获取佣金列表


            //以下为post
            Route::POST('upAddress','ApiController@upAddress');  //更改地址
            Route::POST('shopApply','ApiController@shopApply');  //入驻申请
            Route::POST('tixian','ApiController@tixian');  //入驻提现
            Route::POST('/up_user_info','ApiController@up_user_info'); //完善个人资料

        });


    });

    Route::get('/admin/logout', function () {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    });


//    Route::resource('user','Admin\userController');



    Route::group(['middleware'=>'AdminAuth','namespace'=>'Admin','prefix'=>'admin'],function (){
        Route::resource('article','ArticleController');
        Route::resource('team','TeamController');
        Route::resource('message','MessageController');
        Route::resource('car','CarController');
        Route::resource('order_list','Order_listController');
        Route::resource('rcase','RcaseController');
        Route::resource('report','ReportController');

        Route::get('/', 'AuthController@index');
        Route::get('/team/{id}/delete','TeamController@destroy');
        Route::get('/up_password','UserController@up_password');
        Route::post('/up_password','UserController@do_up_password');


    });

    Route::group(['middleware'=>'AdminAuth','prefix'=>'admin'],function (){
        Route::get('/setting', 'HomeController@setting'); //网站设置
        Route::put('/setting', 'HomeController@do_setting');//网站设置

    });

    Route::group(['middleware'=>'AdminAuth'],function (){
        Route::get('article/add_son/{id}','ArticleController@add_son');
        Route::get('article/{id}/look','Admin\ArticleController@look_son');
        Route::get('article/{id}/addson','Admin\ArticleController@add_son');
        Route::get('article/{id}/delete','ArticleController@delete_son');
        Route::post('article/add_son/{id}','Admin\ArticleController@store_son');

        Route::get('report/{id}/delete','Admin\ReportController@destroy');
    });

});


Route::get('admin/login', 'Admin\AuthController@getLogin');
Route::post('admin/login', 'Admin\AuthController@postLogin');


Route::get('/wechat/pushCode', 'ApiController@pushCode');  //获取openid登录
Route::get('/wechat/authCheck', 'ApiController@authCheck');   //检测是否登录



//前端用户
Route::group(['guard' => 'auth'], function () {
    Route::get('index', 'HomeController@index');
});
Auth::routes();
Route::get('logout', function () {
    Auth::logout();
    return redirect('/login');
});

Route::any('/register',function (){
    return null;
});
Route::get('/vaptcha',function (){
    return getCaptcha(4);
});
