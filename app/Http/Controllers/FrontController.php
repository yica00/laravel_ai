<?php

namespace App\Http\Controllers;

use App\Models\Admin\Article;
use App\Models\Admin\Car;
use App\Models\Admin\Order_list;
use App\Models\Admin\Teams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        $nav = 1;
        $slides = $this->getSlides();
        $producets = $this->getProducet();
        $about = $this->getAbout();
        $services = $this->getService();
        $cases = $this->getCases();
        $brands = $this->getBrands();
        $recommends = Article::where('pid',17)->where('link',1)->orderBy('id','desc')->get();
        $newss = Article::where('pid',17)->orderBy('id','desc')->take(6)->get();
        return view('front.index',compact('nav','slides','producets','about','services','cases','recommends','newss','brands'));
    }

    public function getLinks(){
        $articles = Article::select('id','link')->where('pid',66)->get();
        return $articles;
    }
    public function getAbout(){
        $articles = Article::find(2);
        return $articles;
    }
    public function getService(){
        $articles = Article::where('pid',74)->take(3)->get();
        return $articles;
    }
    public function getCases(){
        $articles = Article::select('id','title','thumbnail')->where('pid',6)->orderBy('id','desc')->take(6)->get();
        return $articles;
    }
    public function getBrands(){
        $article = Article::where('pid',22)->take(10)->get();
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
        $articles = Article::where('pid',4)->get();
        return $articles;
    }
    public function getProdetail($products){
        $ids = getIds($products);
        $product = Article::select( 'title', 'id','thumbnail','link','comtent')->whereIn('pid', $ids)->orderBy('id', 'desc')->take(6)->get();
        return $product;
    }
    public function getSlides()
    {
        $sons = Article::select('thumbnail','link','id','pid')->where('pid',70)->get();
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
        $articles = Article::where('pid',15)->get();
        $nav = 2;
        $sty = "/team";
        return view('front.team',compact('nav','articles','sty'));
    }
    public function honor(){
        $articles = Article::where('pid',16)->get();
        $nav = 2;
        $sty = "/honor";
        return view('front.team',compact('nav','articles','sty'));
    }


    public function news(){
        $nav = 3;
        $sty = "/news";
        $slenders = Article::where('pid',17)->where('link',1)->orderBy('id','desc')->get();
        $articles = Article::where('pid',17)->orderBy('id','desc')->paginate(5);
        $pages = getPage($articles,5);
        return view('front.news',compact('nav','sty','articles','pages','slenders'));
    }
    public function industry_news(){
        $nav = 3;
        $sty = "/industry_news";
        $slenders = Article::where('pid',18)->where('link',1)->orderBy('id','desc')->get();
        $articles = Article::where('pid',18)->orderBy('id','desc')->paginate(5);
        $pages = getPage($articles,5);
        return view('front.news',compact('nav','sty','articles','pages','slenders'));
    }
    public function wikipedia(){
        $nav = 3;
        $sty = "/wikipedia";
        $slenders = Article::where('pid',19)->where('link',1)->orderBy('id','desc')->get();
        $articles = Article::where('pid',19)->orderBy('id','desc')->paginate(5);
        $pages = getPage($articles,5);
        return view('front.news',compact('nav','sty','articles','pages','slenders'));
    }
    public function new_detail($id){
        $article = Article::find($id);
        $nav = 3;
        $up_down = get_up_down_page($id,$article->pid);
        if($article->pid == 17){
            $sty = "/news";
        }elseif ($article->pid == 18){
            $sty = "/industry_news";
        }else{
            $sty = "/wikipedia";
        }
        return view('front.news_in',compact('nav','article','up_down','sty'));
    }


    public function product(  $id = 20){
        $nav = 4;
        $articles = Article::where('pid',$id)->paginate(6);
        $pages = getPage($articles,6);
        return view('front.product',compact('nav','id','pages','articles'));
    }
    public function product_detail( $id ){
        $nav = 4;
        $article = Article::find($id);
        $articles = Article::where('pid',$id)->get();
        if(count($articles)){
            $articles[0]->comtent = get_article_imgs($articles[0]->comtent,100);
        }
        $up_down = get_up_down_page($id,$article->pid);
        return view('front.product_in',compact('nav','article','articles','up_down'));
    }


    public function equipment( $page = 1 ){
        $nav = 5;
        $articles = Article::where('pid',5)->paginate(6);
        $pages = getPage($articles,6);
        return view('front.equip',compact('nav','articles','pages'));
    }
    public function equipment_detail( $id ){
        $nav = 5;
        $article = Article::find($id);
        $articles = Article::where('pid',$id)->get();
        if(count($articles)){
            $articles[0]->comtent = get_article_imgs($articles[0]->comtent,100);
        }
        $up_down = get_up_down_page($id,$article->pid);
        return view('front.equip_in',compact('nav','article','articles','up_down'));
    }

    public function our_case($page = 1 ){
        $nav = 6;
        $articles = Article::where('pid',6)->orderBy('id','desc')->paginate(6);
        $pages = getPage($articles,6);
        return view('front.case',compact('nav','articles','pages'));
    }
    public function case_detail($id){
        $nav = 6;
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        return view('front.case_in',compact('nav','article','up_down'));
    }

    public function brand(){
        $nav = 7;
        $articles = Article::where('pid',22)->orderBy('id','desc')->paginate(15);
        $pages = getPage($articles,15);
        return view('front.brand',compact('nav','articles','pages'));
    }
    public function sales_list( $id = 67 ){
        $nav = 7;
        $articles = Article::where('pid',23)->orderBy('id','asc')->get();
        $order_lists = Order_list::where('article_id',$id)->orderBy('id','desc')->paginate(10);
        $pages = getPage($order_lists,10);
        return view('front.list',compact('nav','articles','order_lists','pages','id'));
    }


    public function service( $id = 24 ){
        $nav = 8;
        $article = Article::find($id);
        return view('front.service',compact('nav','article','id'));
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
    }
    public function way()
    {
        $nav = 9;
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
