<?php

namespace App\Http\Controllers;

use App\Models\Admin\Article;
use App\Models\Admin\Car;
use App\Models\Admin\Teams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        $slides = $this->getSlides();
        $recommends = $this->getRecommend();
        $products = $this->getProducet();
        $cases = $this->getCase();
        $newss = $this->getNews();
        $scences = $this->getScence();
        $nav = 1;
        return view('front.index',compact('nav'));
//        return view('front.index',compact('slides','cases','newss','scences','products','recommends'));
    }

    public function getRecommend(){
        $articles = Article::where('pid',72)->orderBy('id','asc')->get();
        return $articles;
    }
    public function getScence(){
        $articles = Article::where('pid',32)->orderBy('id','desc')->take(6)->get();
        return $articles;
    }
    public function getCase(){
        $articles = Article::where('pid',5)->orderBy('id','desc')->take(6)->get();
        return $articles;
    }
    public function getNews(){
        $articles = Article::whereIn('pid',[28,29])->orderBy('id','desc')->take(6)->get();
        return $articles;
    }

    public function getIntroduce(){
        $introduce = Article::find(2);
        return $introduce;
    }

    public function getProducet()
    {
        $product = Article::select( 'thumbnail','title', 'id','pid')->where('pid', 4)->orderBy('id', 'asc')->take(8)->get();
        return $product;
    }

    public function getProdetail($products){
        $ids = getIds($products);
        $product = Article::select( 'title', 'id','thumbnail','link','comtent')->whereIn('pid', $ids)->orderBy('id', 'desc')->take(6)->get();
        return $product;
    }

    public function getSlides()
    {
        $sliders = Article::select('thumbnail','link')->where('pid', 1)->orderBy('id', 'asc')->get();
        return $sliders;
    }

    public function getCases()
    {
        $base1 = Article::select('comtent', 'thumbnail')->where('pid', '17')->orderBy('id', 'desc')->get();
        return $base1;
    }

    public function getTeams()
    {
        $teams = Teams::select('id', 'photo', 'belong_to', 'name','iterm')->orderBy('id', 'desc')->get();
        return $teams;
    }



    public function about(){
        $article = Article::find(9);
        $nav = 2;
        $sty = 1;
        return view('front.about',compact('article','nav','sty'));
    }
    public function culture(){
        $article = Article::find(10);
        $nav = 2;
        $sty = 2;
        return view('front.about',compact('nav','article','sty'));
    }


    public function driver(){
        $nav = 3;
        $article = Article::find(11);
        return view('front.driver',compact('nav','article'));
    }
    public function process(){
        $nav = 3;
        $article = Article::find(12);
        return view('front.driver_2',compact('nav','article'));
    }

    public function training(){
        $article = Article::find(13);
        $nav = 4;
        $sty = 1;
        return view('front.training',compact('nav','article','sty'));
    }
    public function service_training(){
        $article = Article::find(14);
        $nav = 4;
        $sty = 2;
        return view('front.training',compact('nav','article','sty'));
    }

    public function models(){
        $article = Article::find(15);
        $articles = Article::where('pid',15)->get();
        $nav = 5;
        return view('front.models',compact('nav','article','articles'));
    }
    public function cars(){
        $articles = Car::paginate(6);
        $pages = getPage($articles,6);
        $nav = 5;
        return view('front.car',compact('nav','articles','pages'));
    }

    public function didi(){
        $article = Article::find(6);
        $nav = 6;
        return view('front.didi',compact('nav','article'));
    }


    public function teacher(){
        $articles = Teams::paginate(6);
        $pages = getPage($articles,6);
        $nav = 7;
        return view('front.teacher',compact('nav','articles','pages'));
    }

    public function teacher_detail($id){
        $teacher = Teams::find($id);
        $teacher = $this->formartData($teacher);
        $nav = 7;
        return view('front.teacher_in',compact('nav','teacher'));
    }


    public function contact(){
        $self = Article::find(59);
        $articles = Article::select( 'title','comtent')->where('pid', 59)->orderBy('id', 'desc')->paginate(3);
        $pages = getPage($articles,3);
        $nav = 8;
        return view('front.contact',compact('nav','articles','self','pages'));
    }

    public function contact_way(){
        $sty='contact';
        return view('front.way',compact('sty'));
    }

    public function formartData($data)
    {
        $data->iterm = explode(',',$data->iterm);
        $data->imgs = explode(',',$data->imgs);
        return $data;
    }

}
