<?php

namespace App\Http\Controllers;

use App\Models\Admin\Article;
use App\Models\Admin\Teams;
use App\User;
use Illuminate\Http\Request;
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



}
