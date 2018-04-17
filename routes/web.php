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
Route::get('/',function (){
    return redirect('admin');
});


Route::group(['as'=>'front'],function (){

    Route::group(['prefix'=>'api'],function (){
        Route::get('/','ApiController@index');
        Route::get('/about','ApiController@about');
        Route::get('/face','ApiController@face');

        Route::get('service','ApiController@service');
        Route::get('service/{id}','ApiController@service_detail');

        Route::get('equipment','ApiController@equipment');

        Route::get('news','ApiController@news');
        Route::get('news/{id}','ApiController@news_detail');

        Route::get('goodss','ApiController@goods_list');
        Route::get('goods/{id}','ApiController@goods_detail');

        Route::get('shops','ApiController@shop_list');
        Route::get('shop/{id}','ApiController@shop_detail');

        Route::get('categorys','ApiController@category_list');
        Route::get('category/{id}','ApiController@category_detail');

        Route::get('brands','ApiController@brand_list');


        //需要验证登录
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



    Route::group(['middleware'=>['AdminAuth','check_setting'],'namespace'=>'Admin','prefix'=>'admin'],function (){
        Route::resource('article','ArticleController');
        Route::resource('team','TeamController');
        Route::resource('message','MessageController');
        Route::resource('car','CarController');
        Route::resource('order_list','Order_listController');
        Route::resource('rcase','RcaseController');
        Route::resource('report','ReportController');
        Route::resource('user','UserController');
        Route::resource('user','UserController');
        Route::resource('customer','CustomerController');
        Route::resource('category','CategoryController');
        Route::resource('level','LevelController');

        Route::get('/', 'AuthController@index');
        Route::get('/team/{id}/delete','TeamController@destroy');
        Route::get('/up_password','UserController@up_password');
        Route::post('/up_password','UserController@do_up_password');


    });

    Route::group(['middleware'=>'AdminAuth','prefix'=>'admin'],function (){
        Route::get('/setting', 'HomeController@setting'); //网站设置
        Route::put('/setting', 'HomeController@do_setting');//网站设置

        Route::get('customer/{id}/delete','Admin\CustomerController@destroy');
        Route::get('category/{id}/delete','Admin\CategoryController@destroy');
        Route::get('level/{id}/delete','Admin\LevelController@destroy');

    });

    Route::group(['middleware'=>'AdminAuth'],function (){
        Route::get('article/add_son/{id}','ArticleController@add_son');
        Route::get('article/{id}/look','Admin\ArticleController@look_son');
        Route::get('article/{id}/addson','Admin\ArticleController@add_son');
        Route::get('article/{id}/delete','Admin\ArticleController@delete_son');
        Route::post('article/add_son/{id}','Admin\ArticleController@store_son');

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
