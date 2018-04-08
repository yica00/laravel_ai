<?php

namespace App\Http\Controllers;

use App\Models\Admin\Article;
use App\Models\Admin\Teams;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class ApiController extends Controller
{

    public function index(Request $request)
    {
        $slides = $this->getSlides();
//        $products = $this->getProduct();
//        $categorys = $this->getCategory();
//        $shops = $this->getShop();
        return [$slides];
    }


    public function getSlides()
    {
        $articles = Article::where('pid', 1)->get();
        return $articles;
    }
    public function getCategory()
    {
        $articles = Category::all();
        return $articles;
    }
    public function getShop()
    {
        $articles = Shop::where('home_page',1)->orderBy('id','desc')->take(8)->get();
        return $articles;
    }
    public function getProduct()
    {
        $articles = Goods::where('home_page',1)->orderBy('id','desc')
            ->orderBy('serial_number','desc')->take(10)->get();
        return $articles;
    }

    public function getAbout()
    {
        $article = Article::find(17);
        return $article;
    }

    public function slides()
    {
        $articles = Article::where('pid', 1)->get();
        return $articles;
    }

    public function up_user_info(UserUpRequest $request)
    {
        $atic = Input::except('_token','_method');
        $user = User::find(Auth::id());
        $rel = $user->update($atic);
        if( $rel){
            return back()->with('errors','修改成功');
        }
        return back()->withErrors();
    }


    public function pushCode(){
        $code = Input::get('code');
        $refer = Input::get('uid');
        $app = app('wechat');
        $miniProgram = $app->mini_program;
        $rel = $miniProgram->sns->getSessionKey($code);
        if ( isset($rel->openid) ){
            $user = User::where('openid',$rel->openid)->first();
            if( !$user ){
                $xxx = User::find($refer);
                if(!$xxx){
                    $refer = 0;
                }
                $user = [
                    'name'=>num11(),
                    'password'=>Hash::make("123456"),
                    'openid'=>$rel->openid,
                    'refer'=>$refer,
                ];
                $user = User::create($user);
            }
            Auth::login($user);
            return ['statue'=>1 ];
        }else{
            file_put_contents(storage_path('notify.txt'), '时间：' . Carbon::now(). "\r\n", FILE_APPEND);
            return ['statue'=>0 ];
        }
    }

    public function authCheck(){
        if( Auth::check() ){
            return ['statue'=>1,'photo'=>Auth::user()->photo ];
        }
        return ['statue'=>0];
    }


}
