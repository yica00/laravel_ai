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
//        $slides = $this->getSlides();
//        $driver = $this->getDriver();
//        $model = $this->getModels();
//        $cars = $this->getCars();
//        $didi = $this->getDidi();
//        $teachers = $this->getTeachers();
        $nav = 1;
        return view('front.index',compact('nav'));
//        return view('front.index',compact('nav','driver','slides','model','cars','didi','teachers'));
    }

    public function getDriver(){
        $article = Article::find(3);
        return $article;
    }
    public function getModels(){
        $article = Article::find(15);
        return $article;
    }
    public function getCars(){
        $articles = Car::take(3)->get();
        return $articles;
    }
    public function getDidi(){
        $introduce = Article::find(6);
        return $introduce;
    }

    public function getTeachers(){
        $introduce = Teams::take(6)->get();
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
        $company = Article::find(8);
        $culture = Article::find(9);
        $partners = Article::where('pid',11)->orderBy('id','desc')->take(5)->get();
        $teams = Teams::all();
        $teams = $this->formartData($teams);
        $nav = 2;
        return view('front.about',compact('nav','company','culture','partners','teams'));
    }


    public function technology(){
        $nav = 3;
        $sty = "/technology";
        $article = Article::find(21);
        return view('front.technology',compact('nav','article','sty'));
    }
    public function mobile(){
        $nav = 3;
        $sty = "/mobile";
        $article = Article::find(22);
        return view('front.technology',compact('nav','article','sty'));
    }
    public function marketing(){
        $nav = 3;
        $sty = "/marketing";
        $article = Article::find(23);
        return view('front.technology',compact('nav','article','sty'));
    }
    public function network(){
        $nav = 3;
        $sty = "/network";
        $article = Article::find(24);
        return view('front.technology',compact('nav','article','sty'));
    }



    public function web_case( $id = 27 ){
        $articles = Article::where('pid',5)->get();
        $nav = 4;
        return view('front.case',compact('nav','articles','id'));
    }
    public function case_detail($id){


    }

    public function news(){
        $article = Article::find(15);
        $articles = Article::where('pid',15)->get();
        $nav = 5;
        return view('front.news',compact('nav','article','articles'));
    }


    public function contact(){
        $self = Article::find(59);
        $articles = Article::select( 'title','comtent')->where('pid', 59)->orderBy('id', 'desc')->paginate(3);
        $pages = getPage($articles,3);
        $nav = 6;
        return view('front.contact',compact('nav','articles','self','pages'));
    }


    public function formartData($data)
    {
        foreach ($data as $da){
            $da->iterm = explode(',',$da->iterm);
        }
        return $data;
    }

}
