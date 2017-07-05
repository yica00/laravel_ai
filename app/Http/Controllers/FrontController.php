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
        $nav = 1;
        return view('front.index',compact('nav'));


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
        return view('front.index',compact('nav','cases','about','teams','pateners','desc_pateners','plans','slides','links'));
    }

    public function getLinks(){
        $articles = Article::select('id','link')->where('pid',66)->get();
        return $articles;
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
        $article = Article::find(10);
        $nav = 2;
        $sty = 1;
        return view('front.about',compact('nav','article','sty'));
    }
    public function culture(){
        $article = Article::find(11);
        $nav = 2;
        $sty = 2;
        return view('front.about',compact('nav','article','sty'));
    }
    public function office(){
        $articles = Article::where('pid',12)->get();
        $nav = 2;
        $sty = 3;
        return view('front.office',compact('nav','articles','sty'));
    }
    public function honor(){
        $articles = Article::where('pid',13)->get();
        $nav = 2;
        $sty = 4;
        return view('front.office',compact('nav','articles','sty'));
    }


    public function news(){
        $nav = 3;
        $category = "news";
        $articles = Article::where('pid',14)->paginate(9);
        $pages = getPage($articles,9);
        return view('front.news',compact('nav','category','articles','pages'));
    }
    public function industry_news(){
        $nav = 3;
        $category = "industry_news";
        $articles = Article::where('pid',15)->paginate(9);
        $pages = getPage($articles,9);
        return view('front.news',compact('nav','category','articles','pages'));
    }
    public function new_detail($id){
        $article = Article::find($id);
        $nav = 3;
        $up_down = get_up_down_page($id,$article->pid);
        if($article->pid == 25){
            $sty = "news";
        }else{
            $sty = "industry_news";
        }
        return view('front.news_in',compact('nav','article','up_down','sty'));
    }


    public function product(  $id = 16,$page = 1  ){
        $article = Article::find($id);
        $arr = get_article_imgs($article->comtent,2);
        $article->comtent = $arr;

        $pages = getImgsPage(count($arr),2);
        $nav = 4;
        return view('front.product',compact('nav','id','article','pages'));
    }

    public function our_case( ){
        $nav = 5;
        return view('front.case',compact('nav'));

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


    public function equipment(){
        $nav = 6;
        return view('front.equip',compact('nav'));
    }



    public function service(){
        $nav = 7;
        return view('front.service',compact('nav'));
    }


    public function contact(){
        $nav = 8;
        return view('front.contact',compact('nav'));

        $self = Article::find(59);
        $articles = Article::select( 'title','comtent')->where('pid', 59)->orderBy('id', 'desc')->paginate(3);
        $pages = getPage($articles,3);
        $nav = 6;
        return view('front.contact',compact('nav','articles','self','pages'));
    }
    public function way()
    {
        $nav = 8;
        return view('front.way', compact('nav'));
    }


    public function formartData($data)
    {
        foreach ($data as $da){
            $da->iterm = explode(',',$da->iterm);
        }
        return $data;
    }

}
