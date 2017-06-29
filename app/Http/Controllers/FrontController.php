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
        $introduce = $this->getIntroduce();
        $products = $this->getProducet();
        $core1 = $this->getCore1();
        $core2 = $this->getCore2();
        $bases = $this->getBases();
        $pro_details = $this->getProdetail($products);
        $sty='index';
        return view('front.index',compact('sty','slides','introduce','products','core1','core2','bases','pro_details','pro_details'));
    }

    public function getCore1(){
        $core1 = Article::find(50);
        return $core1;
    }

    public function getCore2(){
        $core2 = Article::find(51);
        return $core2;
    }

    public function getIntroduce(){
        $introduce = Article::find(2);
        return $introduce;
    }

    public function getPlans(){
        $plans = Article::select('thumbnail', 'title', 'id')->where('pid', 18)->orderBy('id', 'asc')->get();
        return $plans;
    }

    public function getProducet()
    {
        $product = Article::select( 'title', 'id','pid')->where('pid', 4)->orderBy('id', 'asc')->get();
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

    public function getBases()
    {
        $bases = Article::select('thumbnail','title','link')->where('pid', '7')->orderBy('id', 'asc')->get();
        return $bases;
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
        $article = Article::find(12);
        $sty='about';
        return view('front.about',compact('sty','article'));
    }

    public function culture(){
        $article = Article::find(13);
        $sty='about';
        return view('front.about2',compact('sty','article'));
    }

    public function office_env(){
        $articles = Article::select( 'thumbnail','title')->where('pid', '14')->orderBy('id', 'asc')->get();
        $sty='about';
        return view('front.office',compact('sty','articles'));
    }

    public function team(){
        $articles = Article::select( 'thumbnail','title')->where('pid', '15')->orderBy('id', 'asc')->get();
        $sty='about';
        return view('front.office2',compact('sty','articles'));
    }

    public function honor(){
        $articles = Article::select( 'thumbnail','title')->where('pid', '16')->orderBy('id', 'asc')->get();
        $sty='about';
        return view('front.office3',compact('sty','articles'));
    }

    public function news(){
        $articles = Article::select( 'thumbnail','title','created_at','comtent','id')->where('pid', '29')->orderBy('id', 'desc')->paginate(6);
        $sty='news';
        $pages = getPage($articles,6);
        return view('front.news',compact('sty','articles','pages'));
    }

    public function news_Detail($id){
        $article = Article::find($id);
        $sty='news';
        return view('front.news_in',compact('sty','article'));

    }

    public function industy_news(){
        $articles = Article::select( 'thumbnail','title','created_at','comtent','id')->where('pid', '30')->orderBy('id', 'desc')->paginate(6);
        $sty='news';
        $pages = getPage($articles,6);
        return view('front.news2',compact('sty','articles','pages'));
    }

    public function product($id=43){
//        $categorys = Article::select( 'title','link','id')->where('pid', '4')->orderBy('id', 'asc')->get();
        $articles = Article::select( 'thumbnail','title','link','comtent','id')->where('pid', $id)->orderBy('id', 'desc')->paginate(5);
        $pages = getPage($articles,5);
        $sty='product';
        return view('front.product',compact('sty','id','articles','pages'));
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
    public function core(){
        $article = Article::find(50);
        $sty='core';
        return view('front.core',compact('sty','article'));
    }

    public function core_character(){
        $article = Article::find(51);
        $sty='core';
        return view('front.core_2',compact('sty','article'));
    }

    public function service(){
        $article = Article::find(6);
        $sty='service';
        return view('front.service',compact('sty','article'));
    }

    public function pro_base($id = 52){
        $self = Article::find($id);
        $articles = Article::select( 'thumbnail')->where('pid', $id)->orderBy('id', 'asc')->get();
        $sty='base';
        return view('front.product_base',compact('sty','articles','id','self'));
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
