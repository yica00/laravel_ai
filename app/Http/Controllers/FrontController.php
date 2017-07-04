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
        $bgs = $this->getBgs();
        $ids = getIds($bgs);
        $arr =  $bgs->toArray();
        $slides = $this->getSlides( $arr,$ids );
        $cases = $this->getCases();
        $about = $this->getAbout();
        $teams = $this->getTeam();
        $pateners = $this->getPatener();
        $desc_pateners = $this->getDescPatener();
        $plans = $this->getPlans();
        $nav = 1;
        return view('front.index',compact('nav','cases','about','teams','pateners','desc_pateners','plans','slides'));
    }

    public function getPlans(){
        $articles = Article::where('pid',49)->get();
        foreach ( $articles as $art ){
            $art->link = explode(',',$art->link);
        }
        return $articles;
    }
    public function getPatener(){
        $articles = Article::where('pid',11)->take(5)->get();
        return $articles;
    }
    public function getDescPatener(){
        $articles = Article::where('pid',11)->orderBy('id','desc')->take(5)->get();
        return $articles;
    }
    public function getCases(){
        $articles = Article::find(5)->articles()->get();
        $ids = getIds($articles);
        $articles = Article::whereIn('pid',$ids)->orderBy('id','desc')->take(8)->get();
        return $articles;
    }
    public function getAbout(){
        $article = Article::find(3);
        return $article;
    }
    public function getTeam(){
        $teams = Teams::all();
        $teams = $this->formartData($teams);
        return $teams;
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

    public function getBgs()
    {
        $sliders = Article::select('thumbnail','link','id','pid')->where('pid', 1)->get();
        return $sliders;
    }
    public function getSlides( $bgs,$ids )
    {
        $sons = Article::select('thumbnail','link','id','pid')->whereIn('pid', $ids)->get()->toArray();
        $all = array_merge($bgs,$sons);
        $all = getArraySubs($all,1);
        return $all;
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
        $articles = Article::where('pid',21)->get();
        return view('front.technology',compact('nav','article','sty','articles'));
    }
    public function mobile(){
        $nav = 3;
        $sty = "/mobile";
        $article = Article::find(22);
        $articles = Article::where('pid',21)->get();
        return view('front.technology',compact('nav','article','sty','articles'));
    }
    public function marketing(){
        $nav = 3;
        $sty = "/marketing";
        $article = Article::find(23);
        $articles = Article::where('pid',21)->get();
        return view('front.technology',compact('nav','article','sty','articles'));
    }
    public function network(){
        $nav = 3;
        $sty = "/network";
        $article = Article::find(24);
        $articles = Article::where('pid',21)->get();
        return view('front.technology',compact('nav','article','sty','articles'));
    }



    public function web_case( $id = 27 ){
        $articles = Article::where('pid',5)->get();
        $ids = getIds($articles);
        if( $id == 27 ){
            $arts = Article::whereIn('pid',$ids)->paginate(9);
        }else{
            $arts = Article::where('pid',$id)->paginate(9);
        }
        $pages = getPage($arts,9);
        $nav = 4;
        return view('front.case',compact('nav','articles','id','arts','pages'));
    }
    public function case_detail($id){
        $article = Article::find($id);
        $nav = 4;
        return view('front.case_in',compact('nav','article'));
    }

    public function news(){
        $articles = Article::where('pid',25)->paginate(9);
        $pages = getPage($articles,9);
        $nav = 5;
        $category = "news";
        return view('front.news',compact('nav','pages','category','articles'));
    }
    public function industry_news(){
        $articles = Article::where('pid',26)->paginate(9);
        $pages = getPage($articles,9);
        $nav = 5;
        $category = "industry_news";
        return view('front.news',compact('nav','pages','category','articles'));
    }
    public function new_detail($id){
        $article = Article::find($id);
        $nav = 5;
        $up_down = get_up_down_page($id,$article->pid);
        if($article->pid == 25){
            $sty = "news";
        }else{
            $sty = "industy_news";
        }
        return view('front.news_in',compact('nav','article','up_down','sty'));
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
