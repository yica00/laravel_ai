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
        $bases = $this->getBases();
        $cases = $this->getCases();
        $teams = $this->getTeams();
        $expands = $this->getExpands();
        $plans = $this->getPlans();
        $team_introduce = Article::find(5);
        return view('front.index', compact('slides', 'bases', 'cases', 'teams', 'expands','plans','team_introduce'));
    }

    public function getPlans(){
        $plans = Article::select('thumbnail', 'title', 'id')->where('pid', 18)->orderBy('id', 'asc')->get();
        return $plans;
    }

    public function getExpands()
    {
        $expands = Article::select('thumbnail', 'link', 'id')->where('pid', 76)->orderBy('id', 'asc')->get();
        return $expands;
    }

    public function getSlides()
    {
        $sliders = Article::select('thumbnail')->where('pid', 1)->orderBy('id', 'desc')->get();
        return $sliders;
    }

    public function getBases()
    {
        $base1 = Article::select('thumbnail')->where('pid', '14')->orderBy('id', 'desc')->get();
        $base2 = Article::select('thumbnail')->where('pid', '15')->orderBy('id', 'desc')->get();
        $base3 = Article::select('thumbnail')->where('pid', '16')->orderBy('id', 'desc')->get();
        return [$base1, $base2, $base3];
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

    public function about_us(){
        $article = Article::find(4);
        return view('front.about',compact('article'));
    }

    public function team(){

        $teams = Teams::select('id','name','belong_to','photo')->orderBy('id','desc')->paginate(6);
        $page = getPage($teams,6);
        return view('front.team',compact('teams','page'));
    }

    public function team_detail($Id){
        $team = Teams::find($Id);
        $team = $this->formartData($team);
        return view('front.team_in',compact('team'));
    }

    public function honor(){
        $honors = Article::select('title','thumbnail')->where('pid','6')->orderBy('id','desc')->get();
        return view('front.honor',compact('honors'));
    }

    public function enterprise(){
        $article = Article::find(8);
        $articles = Article::select('thumbnail')->where('pid','8')->orderBy('id','asc')->get();
        return view('front.expand',compact('article','articles'));
    }

    public function parenting(){
        $article = Article::find(9);
        $articles = Article::select('thumbnail')->where('pid','9')->orderBy('id','asc')->get();
        return view('front.expand',compact('article','articles'));
    }

    public function cs(){
        $article = Article::find(10);
        $articles = Article::select('thumbnail')->where('pid','10')->orderBy('id','asc')->get();
        return view('front.cs',compact('article','articles'));
    }

    public function camp(){
        $article = Article::find(11);
        $articles = Article::select('thumbnail')->where('pid','11')->orderBy('id','asc')->get();
        return view('front.camp',compact('article','articles'));
    }

    public function training(){
        $article = Article::find(12);
        $articles = Article::select('thumbnail')->where('pid','12')->orderBy('id','asc')->get();
        return view('front.training',compact('article','articles'));
    }

    public function base_xisan(){
        $articles = Article::select('thumbnail')->where('pid','14')->orderBy('id','desc')->paginate(6);
        $page = getPage($articles,6);
        return view('front.fight_base',compact('articles','page'));
    }

    public function base_qingshan(){
        $articles = Article::select('thumbnail')->where('pid','15')->orderBy('id','desc')->paginate(6);
        $page = getPage($articles,6);
        return view('front.fight_base2',compact('articles','page'));
    }

    public function base_guoleyuan(){
        $articles = Article::select('thumbnail')->where('pid','16')->orderBy('id','desc')->paginate(6);
        $page = getPage($articles,6);
        return view('front.fight_base3',compact('articles','page'));
    }

    public function our_case(){
        $articles = Article::select('thumbnail','comtent')->where('pid','17')->orderBy('id','desc')->paginate(6);
        return view('front.case',compact('articles'));
    }

    public function plan(){
        $plans = Article::select('thumbnail', 'title', 'id')->where('pid', 18)->orderBy('id', 'asc')->paginate(6);
        return view('front.plan',compact('plans'));
    }

    public function plan_detail($id){
        $plan_fa = Article::find($id);
        $plans = Article::select('thumbnail', 'title', 'id','comtent')->where('pid', $id)->get();
        return view('front.plan_in',compact('plans','plan_fa'));
    }
    public function contact(){
        $articles = Article::select('title','comtent')->where('pid','19')->orderBy('id','asc')->get();
        return view('front.contact',compact('articles'));
    }

    public function formartData($data)
    {
        $data->iterm = explode(',',$data->iterm);
        return $data;
    }

}
