<?php

namespace App\Http\Controllers;

use App\Models\Admin\Article;
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
        return view('front.index',compact('slides','cases','newss','scences','products','recommends'));
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
        $article = Article::find(10);
        $link = "/about";
        return view('front.about',compact('article','link'));
    }
    public function culture(){
        $article = Article::find(11);
        $link = "/culture";
        return view('front.about',compact('link','article'));
    }
    public function dev_history(){
        $article = Article::find(12);
        $link = "/dev_history";
        return view('front.about',compact('link','article'));
    }
    public function organization(){
        $article = Article::find(13);
        $link = "/organization";
        return view('front.about',compact('link','article'));
    }
    public function speak(){
        $article = Article::find(14);
        $link = "/speak";
        return view('front.about',compact('link','article'));
    }
    public function view(){
        $articles = Article::select('thumbnail','title')->where('pid',15)->get();
        $link = "/view";
        return view('front.show',compact('articles','link'));
    }



    public function news(){
        $pid = 28;
        $articles = Article::select( 'thumbnail','title','created_at','comtent','id')->where('pid', $pid)->orderBy('id', 'desc')->paginate(6);
        $pages = getPage($articles,6);
        $category = "company_news";
        return view('front.news',compact('pid','articles','pages','category'));
    }
    public function industy_news(){
        $pid = 29;
        $articles = Article::select( 'thumbnail','title','created_at','comtent','id')->where('pid', $pid)->orderBy('id', 'desc')->paginate(6);
        $pages = getPage($articles,6);
        $category = "industy_news";
        return view('front.news',compact('articles','pages','pid','category'));
    }
    public function news_Detail($id){
        $article = Article::find($id);
        if($article->pid == 28){
            $sty = "company_news";
        }else{
            $sty = "industy_news";
        }
        $up_down = get_up_down_page($id,$article->pid);
        return view('front.news_in',compact('sty','article','up_down'));
    }



    public function product($id=16){
        $articles = Article::select( 'thumbnail','title','link','comtent','id')->where('pid', $id)->orderBy('id', 'desc')->paginate(5);
        $pages = getPage($articles,5);
        return view('front.product',compact('id','articles','pages'));
    }



    public function actual_case(){
        $articles = Article::select('thumbnail','title','link')->where('pid',5)->orderBy('id','desc')->paginate(9);
        $pages = getPage($articles,9);
        return view('front.case',compact('pages','articles'));
    }



    public function product_detail($id){
        $pid = Article::find($id)->pid;
        $articles = Article::select( 'thumbnail','title','comtent','id')->where('pid', $id)->orderBy('id', 'asc')->get();
        $sty='product';
        $pre_page = Article::where('id','<',$id)->where('pid',$pid)->first();
        $pre_id = $id;
        if($pre_page){
            $pre_id = $pre_page->id;
        }
        $next_page = Article::where('id','>',$id)->where('pid',$pid)->first();
        $next_id = $id;
        if($next_page){
            $next_id = $next_page->id;
        }
        return view('front.product_in',compact('sty','pid','articles','pre_id','next_id'));
    }



    public function service(){
        $article = Article::find(30);
        $sty='service';
        return view('front.service',compact('sty','article'));
    }
    public function promise(){
        $article = Article::find(31);
        $sty='promise';
        return view('front.service',compact('sty','article'));
    }
    public function scence(){
        $articles = Article::select( 'thumbnail','title','link')->where('pid', 32)->orderBy('id', 'asc')->paginate(8);
        $pages = getPage($articles,8);
        return view('front.site',compact('articles','pages'));
    }



    public function pro_base($id = 52){
        $self = Article::find(59);
        $articles = Article::select( 'title','comtent')->where('pid', 59)->orderBy('id', 'desc')->paginate(3);
        $pages = getPage($articles,3);
        $sty='base';
        return view('front.product_base',compact('sty','articles','id','self'));
    }

    public function recruit(){
        $self = Article::find(8);
        $articles = Article::select( 'title','comtent')->where('pid', 8)->orderBy('id', 'desc')->paginate(3);
        $pages = getPage($articles,3);
        return view('front.human',compact('self','articles','pages'));
    }

    public function contact(){
        $self = Article::find(59);
        $articles = Article::select( 'title','comtent')->where('pid', 59)->orderBy('id', 'desc')->paginate(3);
        $pages = getPage($articles,3);
        $sty='contact';
        return view('front.contact',compact('sty','articles','self','pages'));
    }

    public function contact_way(){
        $sty='contact';
        return view('front.way',compact('sty'));
    }

    public function formartData($data)
    {
        $data->iterm = explode(',',$data->iterm);
        return $data;
    }

}
