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
        $sliders = $this->getSliders();
        $products = $this->getProduct();
        $vitnesss = $this->getVitness();
        $cases = $this->getCases();
        $newss = $this->getNews();
        $teams = $this->getTeam();
        $links = $this->getLink();
        return view('front.index',compact('nav','products','teams','sliders','vitnesss','cases','newss','links'));
    }


    public function getLink(){
        $Articles = Article::where('pid',46)->orderBy('serial_number','desc')->orderBy('id','desc')->take(14)->get();
        return $Articles;
    }
    public function getVitness(){
        $Articles = Article::where('pid',28)->orderBy('serial_number','desc')->orderBy('id','desc')->take(6)->get();
        return $Articles;
    }
    public function getNews(){
        $articles = Article::where('pid',7)->get();
        $ids = getIds($articles);
        $articles = Article::whereIn('pid',$ids)->orderBy('serial_number','desc')->orderBy('id','desc')->take(6)->get();
        return $articles;
    }
    public function getEnv(){
        $articles = Article::find(9);
        $articles->comtent = get_article_imgs( $articles->comtent,20 );
        return $articles;
    }
    public function getAbout(){
        $articles = Article::find(24);
        return $articles;
    }
    public function getService(){
        $articles = Article::where('pid',74)->take(3)->get();
        return $articles;
    }
    public function getCases(){
        $articles = Article::where('pid',15)->get();
        $ids = getIds($articles);
        $articles = Article::select('id','title','thumbnail','serial_number')->whereIn('pid',$ids)->orderBy('serial_number','desc')->orderBy('id','desc')->take(6)->get();
        return $articles;
    }
    public function getBrands(){
        $article = Article::where('pid',22)->take(10)->get();
        return $article;
    }
    public function getTeam(){
        $teams = Teams::take(10) ->get();
        return $teams;
    }
    public function getModels(){
        $article = Article::find(15);
        return $article;
    }

    public function getTeachers(){
        $introduce = Teams::take(6)->get();
        return $introduce;
    }
    public function getProduct()
    {
        $articles = Article::select('id','title','link','thumbnail')->where('pid',6)->orderBy('serial_number','desc')->take(8)->get();
        return $articles;
    }
    public function getProdetail($products){
        $ids = getIds($products);
        $product = Article::select( 'title', 'id','thumbnail','link','comtent')->whereIn('pid', $ids)->orderBy('id', 'desc')->take(6)->get();
        return $product;
    }
    public function getSliders()
    {
        $sons = Article::select('thumbnail','link','id','pid')->where('pid',41)->get();
        return $sons;
    }
    public function getTeams()
    {
        $teams = Teams::select('id', 'photo', 'belong_to', 'name','iterm')->orderBy('id', 'desc')->get();
        return $teams;
    }


    public function about( $id = 9 ){
        $about = Article::find($id);
        return view('front.about',compact('about','id'));
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
        $teams = Teams::select('id','name','photo','title')->orderBy('id','asc')->paginate(6);
        $pages = getPage($teams,6);
        return view('front.team',compact('teams','pages'));
    }
    public function team_detail($id){
        $team = Teams::find($id);
        $ids= explode(',',$team->production);
        $articles = Article::whereIn('id',$ids)->orderBy('serial_number','desc')->get();
        return view('front.team_in',compact('team','articles'));
    }

    public function honor(){
        $articles = Article::where('pid',16)->get();
        $nav = 2;
        $sty = "/honor";
        return view('front.team',compact('nav','articles','sty'));
    }


    public function news( $id = 33 ){
        $articles = Article::where('pid',$id)->orderBy('id','desc')->paginate(6);
        $pages = getPage($articles,6);
        return view('front.news',compact('articles','pages','id'));
    }
    public function new_detail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        $pid = $article->pid;
        return view('front.news_in',compact('pid','article','up_down'));
    }


    public function product( ){
        $articles = Article::where('pid',6)->paginate(8);
        $pages = getPage($articles,8);
        return view('front.product',compact('articles','pages'));
    }
    public function product_detail($id){
        $article = Article::find($id);
        $article->comtent = get_article_imgs($article->comtent,30);
        return view('front.product_in',compact('article'));
    }


    public function doctor(){
        $nav = 4;
        $articles = Article::where('pid',4)->get();
        $article = Article::find(4);
        return view('front.doctor',compact('nav','articles','article'));
    }


    public function our_case( $id = null ){
        $cates = Article::where('pid',15)
            ->orderBy('serial_number','desc')->orderBy('id','desc')->get();
        $ids = getIds($cates);
        if( $id ){
            $ids = [$id];
        }
        $articles = Article::whereIn('pid',$ids)
            ->orderBy('serial_number','desc')->orderBy('id','desc')->paginate(6);
        $pages = getPage($articles,6);
        return view('front.case',compact('nav','cates','id','articles','pages'));
    }
    public function case_detail($id){
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

    public function service( $id = 25 ){
        $article = Article::find($id);
        return view('front.service',compact('article','id'));
    }
    public function witness(){
        $articles = Article::where('pid',28)->orderBy('serial_number','desc')->paginate(8);
        $pages = getPage($articles,8);
        return view('front.witness',compact('articles','pages'));
    }
    public function witness_detail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        return view('front.witness_in',compact('article','up_down'));
    }

    public function contact(){
        return view('front.contact');
    }
    public function message(){
        return view('front.online');
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
