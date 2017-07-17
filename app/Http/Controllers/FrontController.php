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

        $slides = $this->getSlides();
        $producets = $this->getProducet();
        $pateners = $this->getPatener();
        $cases = $this->getCases();
        $equipments = $this->getEquipment();
        $nav = 1;
        return view('front.index',compact('nav','slides','producets','pateners','cases','equipments'));
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
        $articles = Article::where('pid',26)->take(8)->get();
        return $articles;
    }
    public function getCases(){
        $article = Article::find(6);
        $arr = get_article_imgs($article->comtent,6);
        $article->comtent = $arr;
        return $article;
    }
    public function getEquipment(){
        $article = Article::where('pid',7)->take(6)->get();
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
        $articles = Article::where('pid',55)->take(6)->get();
        return $articles;
    }
    public function getProdetail($products){
        $ids = getIds($products);
        $product = Article::select( 'title', 'id','thumbnail','link','comtent')->whereIn('pid', $ids)->orderBy('id', 'desc')->take(6)->get();
        return $product;
    }
    public function getSlides()
    {
        $sons = Article::select('thumbnail','link','id','pid')->where('pid', 1)->get();
        return $sons;
    }
    public function getTeams()
    {
        $teams = Teams::select('id', 'photo', 'belong_to', 'name','iterm')->orderBy('id', 'desc')->get();
        return $teams;
    }


    public function about(){
        $article = Article::find(10);
        $nav = 2;
        $sty = "/about";
        return view('front.about',compact('nav','article','sty'));
    }
    public function culture(){
        $article = Article::find(11);
        $nav = 2;
        $sty = "/culture";
        return view('front.about',compact('nav','article','sty'));
    }
    public function organization(){
        $article = Article::find(12);
        $nav = 2;
        $sty = "/organization";
        return view('front.about',compact('nav','article','sty'));
    }
    public function speech(){
        $article = Article::find(13);
        $nav = 2;
        $sty = "/speech";
        return view('front.about',compact('nav','article','sty'));
    }
    public function history(){
        $articles = Article::where('pid',14)->get();
        $nav = 2;
        $sty = "/history";
        return view('front.history',compact('nav','sty','articles'));
    }
    public function team(){
        $article = Article::find(15);
        $photos = get_article_imgs($article->comtent,100);
        $nav = 2;
        $sty = "/team";
        return view('front.team',compact('nav','articles','sty','photos'));
    }
    public function honor(){
        $articles = Article::where('pid',13)->get();
        $nav = 2;
        $sty = "/honor";
        return view('front.team',compact('nav','articles','sty'));
    }


    public function news(){
        $nav = 3;
        return view('front.news',compact('nav'));
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
        $nav = 4;
        return view('front.product',compact('nav'));

        $article = Article::find($id);
        $arr = get_article_imgs($article->comtent,6);
        $article->comtent = $arr;
        $nav = 4;
        return view('front.product',compact('nav','id','article','pages'));
    }

    public function equipment( $page = 1 ){
        $nav = 5;
        return view('front.equip',compact('nav'));

        $articles = Article::select('title','thumbnail')->where('pid',7)->orderBy('id','desc')->paginate(6);
        $pages = getImgsPage($articles->total(),6);
        $nav = 6;
        return view('front.equip',compact('nav','articles','pages'));
    }

    public function our_case($page = 1 ){
        $nav = 6;
        return view('front.case',compact('nav'));

        $article = Article::find(6);
        $arr = get_article_imgs($article->comtent,6);
        $article->comtent = $arr;
        $nav = 5;
        return view('front.case',compact('nav','article'));
    }
    public function case_detail($id){
        $article = Article::find($id);
        $nav = 4;
        return view('front.case_in',compact('nav','article'));
    }

    public function brand(){
        $nav = 7;
        return view('front.brand',compact('nav'));
    }

    public function service(){
        $nav = 8;
        return view('front.service',compact('nav'));
    }
    public function partner(){
        $articles = Article::select('title','thumbnail')->where('pid',26)->orderBy('id','desc')->paginate(12);
        $pages = getImgsPage($articles->total(),7);
        $nav = 7;
        return view('front.part',compact('nav','articles','pages'));
    }


    public function contact(){
        $nav = 9;
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
