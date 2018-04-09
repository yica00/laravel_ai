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
        $about = $this->getAbout();
        $service = $this->getService();
        $sets = $this->getSeting();
//        $products = $this->getProduct();
//        $categorys = $this->getCategory();
//        $shops = $this->getShop();
        return [$slides,$about,$service,$sets];
    }


    public function getSlides()
    {
        $articles = Article::select('id','thumbnail')->where('pid', 29)
            ->orderBy('serial_number','desc')->get();
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
        $article = Article::select('thumbnail','text')->find(32);
        return $article;
    }
    public function getService()
    {
        $article = Article::select('thumbnail')->find(33);
        return $article;
    }
    public function getSeting()
    {
        $article = json_decode(file_get_contents( storage_path('data.json') ));
        return $article;
    }

    public function about()
    {
        $articles = Article::with('articles')->where('pid', 2)
            ->orderBy('serial_number','deac')->orderBy('id','asc')->get();
        return $articles;
    }

    public function service(){
        $articles = Article::select('id','thumbnail','title','text')->where('pid', 3)
            ->orderBy('serial_number','deac')->orderBy('id','asc')->get();
        return $articles;
    }

    public function service_detail($id){
        $article = Article::select('title','thumbnail')->where('pid',$id)
            ->orderBy('serial_number','deac')->orderBy('id','asc')->get();
        return $article;
    }

    public function news(){
        $articles = Article::select('id','thumbnail','title','created_at')->where('pid', 34)
            ->orderBy('serial_number','deac')->orderBy('id','asc')->take(30)->get();
        return $articles;
    }

    public function news_detail($id){
        $article = Article::find($id);
        return $article;
    }

    public function equipment(){
        $article = Article::select('title','thumbnail')->where('pid',4)
            ->orderBy('serial_number','deac')->orderBy('id','asc')->get();
        return $article;

    }


    public function up_user_info()
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
