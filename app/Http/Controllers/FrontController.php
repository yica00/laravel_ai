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
//        $brands = $this->getBrands();
        $cases = $this->getCases();
        $newss = $this->getNews();
//        $services = $this->getService();
        return view('front.index',compact('products','services','sliders','brands','cases','newss'));
    }


    public function getLink(){
        $Articles = Article::where('pid',50)->orderBy('serial_number','desc')->orderBy('id','desc')->take(14)->get();
        return $Articles;
    }
    public function getVitness(){
        $Articles = Article::where('pid',28)->orderBy('serial_number','desc')->orderBy('id','desc')->take(6)->get();
        return $Articles;
    }
    public function getNews(){
        $articles = Article::where('pid',6)->orderBy('serial_number','desc')->orderBy('id','desc')->take(3)->get();
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
        $articles = Article::where('pid',44)->orderBy('serial_number','desc')->orderBy('id','asc')->get();
        return $articles;
    }
    public function getCases(){
        $articles = Article::select('id','title','thumbnail','serial_number')->where('pid',4)
            ->orderBy('serial_number','desc')->orderBy('id','desc')->take(9)->get();
        return $articles;
    }
    public function getBrands(){
        $article = Article::where('pid',6)->orderBy('serial_number','desc')
            ->orderBy('id','desc')->take(12)->get();
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
        $firsts = Article::where('pid',3)->orderBy('serial_number','desc')->take(6)->get();
//        $arrs = [];
//        for( $j=0;$j<count($firsts);$j++ ){
//            $seconds = Article::where('pid',$firsts[$j]->id)->orderBy('serial_number','desc')->get();
//            $thirds = Article::where('pid',$seconds[0]->id)->orderBy('serial_number','desc')->get();
//            $articles = Article::select('id','title','link','thumbnail')->orderBy('id','asc')
//                ->where('pid',$thirds[0]->id)->orderBy('serial_number','desc')->take(6)->get();
//            $firsts[$j]->articles = $articles;
//            $arrs[] = $firsts[$j];
//        }
        return $firsts;
    }
    public function getProdetail($products){
        $ids = getIds($products);
        $product = Article::select( 'title', 'id','thumbnail','link','comtent')->whereIn('pid', $ids)->orderBy('id', 'desc')->take(6)->get();
        return $product;
    }
    public function getSliders()
    {
        $sons = Article::select('thumbnail','link','id','pid')->where('pid',8)->get();
        return $sons;
    }
    public function getTeams()
    {
        $teams = Teams::select('id', 'photo', 'belong_to', 'name','iterm')->orderBy('id', 'desc')->get();
        return $teams;
    }


    public function about( $id = 9 ){
        $article = Article::find($id);
        return view('front.about',compact('article'));
    }
    public function culture(){
        $article = Article::find(10);
        return view('front.about',compact('article'));
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
        $articles = Article::where('pid',11)->get();
        return view('front.honor',compact('articles'));
    }
    public function env(){
        $articles = Article::where('pid',12)->get();
        return view('front.honor',compact('articles'));
    }


    public function news( ){
        $articles = Article::where('pid',6)->orderBy('serial_number','desc')->orderBy('id','desc')->paginate(6);
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
//        $cid = Input::get('cid');
//        $tid = Input::get('tid');
//        $seconds = Article::where('pid',$id)->orderBy('serial_number','desc')->orderBy('id','asc')->get();
//        if( !$cid ){
//            $cid = $seconds[0]->id;
//        }
//        $thirds = Article::where('pid',$cid)->orderBy('serial_number','desc')->orderBy('id','asc')->get();
//        if( !$tid ){
//            $tid = $thirds[0]->id;
//        }
        $articles = Article::where('pid',3)->orderBy('serial_number','desc')
            ->orderBy('id','desc')->paginate(6);
        $pages = getPage($articles,6);
        return view('front.product',compact('articles','pages','id','cid','tid','seconds','thirds'));
    }
    public function product_detail($id){
        $article = Article::find($id);
        $article->comtent = get_article_imgs($article->comtent,30);
        $up_down = get_up_down_page($id,$article->pid);
//        $third = Article::find($article->pid);
//        $second = Article::find($third->pid);
//        $pid = $second->pid;
        return view('front.product_in',compact('article','pid','up_down'));
    }


    public function doctor(){
        $nav = 4;
        $articles = Article::where('pid',4)->get();
        $article = Article::find(4);
        return view('front.doctor',compact('nav','articles','article'));
    }


    public function our_case( ){
        $articles = Article::where('pid',4)
            ->orderBy('serial_number','desc')->orderBy('id','desc')->paginate(6);
        $pages = getPage($articles,6);
        return view('front.case',compact('articles','pages'));
    }
    public function case_detail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        return view('front.case_in',compact('article','up_down'));
    }

    public function budge(){
        $articles = Article::select('id','title','link')->where('pid',3)->get();
        return view('front.budge',compact('articles'));
    }

    public function sales_list( $id = 67 ){
        $nav = 7;
        $articles = Article::where('pid',23)->orderBy('id','asc')->get();
        $order_lists = Order_list::where('article_id',$id)->orderBy('id','desc')->paginate(10);
        $pages = getPage($order_lists,10);
        return view('front.list',compact('nav','articles','order_lists','pages','id'));
    }

    public function service(){
        $article = Article::find(7);
        return view('front.service',compact('article'));
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

    public function search(){
        $type =  Input::get('type');
        $value =  Input::get('value');

        if( !$type || !$value ){
            return back();
        }
        $arr = ['introduce','title'];

        $id = 17;
        $url = '?type='.$type.'&value='.$value;
        $seconds = Article::where('pid',$id)->orderBy('serial_number','desc')->orderBy('id','asc')->get();
        $cid = $seconds[0]->id;
        $thirds = Article::where('pid',$cid)->orderBy('serial_number','desc')->orderBy('id','asc')->get();
        $tid = $thirds[0]->id;
        $cids= getIds($seconds);
        $all_thirds = Article::whereIn('pid',$cids)->get();
        $all_ids = getIds($all_thirds);

        $articles = Article::whereIn('pid',$all_ids)->where($arr[$type-1],'like','%'.$value.'%')->paginate(6);
        $pages = getPage($articles,6);
        return view('front.product',compact('articles','pages','id','url','seconds','thirds','cid','tid'));
    }
}
