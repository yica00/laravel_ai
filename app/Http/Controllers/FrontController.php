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

//        $cases = $this->getCases();
//        $teams = $this->getTeams();
//        $expands = $this->getExpands();
//        $plans = $this->getPlans();
//        $team_introduce = Article::find(5);
//        return view('front.index', compact('slides', 'bases', 'cases', 'teams', 'expands','plans','team_introduce'));
        $sty='index';
        return view('front.index',compact('sty','slides','introduce','products','core1','core2','bases'));
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
        $product = Article::select( 'title', 'id')->where('pid', 4)->orderBy('id', 'asc')->get();
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

    public function news(){
//        $teams = Teams::select('id','name','belong_to','photo')->orderBy('id','desc')->paginate(6);
//        $page = getPage($teams,6);
        $sty='news';
        return view('front.news',compact('sty'));
    }

    public function product(){
        $sty='product';
        return view('front.product',compact('sty'));
    }

    public function core(){
//        $honors = Article::select('title','thumbnail')->where('pid','6')->orderBy('id','desc')->get();
//        return view('front.honor',compact('honors'));
        $sty='core';
        return view('front.core',compact('sty'));
    }

    public function service(){
        $sty='service';
        return view('front.service',compact('sty'));
    }

    public function pro_base(){
        $sty='base';
        return view('front.product_base',compact('sty'));
    }

    public function contact(){
        $sty='contact';
        return view('front.contact',compact('sty'));
    }

    public function formartData($data)
    {
        $data->iterm = explode(',',$data->iterm);
        return $data;
    }

}
