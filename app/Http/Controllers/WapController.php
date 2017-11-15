<?php

namespace App\Http\Controllers;

use App\Models\Admin\Article;
use App\Models\Admin\Teams;
use Illuminate\Http\Request;

class WapController extends Controller
{
    public function index(Request $request)
    {
        $pics = $this->getPic();
        $classs = $this->getClass();
        $works = $this->getWork();
        $news = $this->getNews();
        return view('front.wap.index',compact('pics','projects','works','schools','qualitys','messages','news','stars','cases','newss','classs','teams'));
    }
    public function getNews(){
        $articles = Article::where('pid',12)->orderBy('serial_number','desc')->orderBy('id','desc')->take(3)->get();
        return $articles;
    }
    public function getPic(){
        $Articles = Article::where('pid',44)->orderBy('serial_number','asc')->get();
        foreach ( $Articles as $k=>$Arti ){
            if( $Arti->serial_number == 50 || $Arti->serial_number == 60 || $Arti->serial_number == 90){
                $Articles[$k]->comtent = get_article_imgs($Arti->comtent,40);
            }
        }
        return $Articles;
    }
    public function getClass(){
        $cat = Article::where('pid',2)->get();
        $ids = getIds($cat);
        $Articles = Article::whereIn('pid',$ids)->orderBy('serial_number','asc')->get();
        return $Articles;
    }
    public function getWork(){
        $teams = Article::with('articles')->orderBy('serial_number','desc')->where('pid',5)->take(5)->get();
        return $teams;
    }

    public function items( $id = 15  ){
        $article = Article::with(['teams' => function($qeury){
            $qeury->orderBy('id','asc')->take(10);
        }])
            ->with(['rcases' => function($qeury){
                $qeury->orderBy('id','asc')->take(4);
            }])
            ->with('articles')
            ->find($id);
        $article->comtent = get_article_imgs($article->comtent,5);
        $cates = Article::where('pid',2)->get();
        return view('front.wap.class',compact('article','id','cates'));
    }
    public function item_detail($id){
        $article = Article::with('articles')->find($id);
        foreach ( $article->articles as $k=>$item ){
            if( $item->serial_number == 300 ){
                $article->classs = Article::with('articles')->find($item->id);
                unset( $article->articles[$k] );
            }
        }
        $cates = Article::where('pid',2)->get();
        return view('front.wap.class_in',compact('article','cates'));
    }

    public function team(){
        $teams = Teams::orderBy('id','asc')->paginate(9);
        $pages = getPage($teams,9);
        $id =1;
        return view('front.wap.teacher',compact('teams','pages','id'));
    }
    public function team_detail($id){
        $team = Teams::with(['rcases'=>function( $qurey ) use($id) {
            $qurey->where('cate',1)->where('team_id',$id)->take(8);
        }])->find($id);
        return view('front.wap.teacher_in',compact('team'));
    }
    public function team_compus($id){
        $team = Teams::with(['rcases'=>function( $qurey ) use($id) {
            $qurey->where('cate',1)->where('team_id',$id)->take(8);
        }])->find($id);
        return view('front.wap.compus_in2',compact('team'));
    }

    public function star(){
        $articles = Article::where('pid',4)->orderBy('serial_number','desc')->orderBy('id','desc')->paginate(6);
        $pages = getPage($articles,6);
        return view('front.wap.star',compact('articles','pages'));
    }
    public function star_dedail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        return view('front.wap.star_in',compact('article','up_down'));
    }

    public function work(){
        $articles = Article::where('pid',5)->orderBy('serial_number','desc')->orderBy('id','desc')->paginate(6);
        $pages = getPage($articles,6);
        return view('front.wap.work',compact('articles','pages'));
    }
    public function work_dedail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        return view('front.wap.work_in',compact('article','up_down'));
    }

    public function news( ){
        $articles = Article::where('pid',12)->orderBy('serial_number','desc')->orderBy('id','desc')->paginate(6);
        $pages = getPage($articles,6);
        return view('front.wap.news',compact('articles','pages'));
    }
    public function new_detail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        $pid = $article->pid;
        return view('front.wap.news_in',compact('pid','article','up_down'));
    }

    public function about(){
        $article = Article::with('teams')->find(8);
        return view('front.wap.about',compact('article'));
    }
    public function culture(){
        $article = Article::find(9);
        return view('front.wap.about',compact('article'));
    }
    public function video(){
        $articles = Article::where('pid',10)->orderBy('serial_number','desc')->orderBy('id','desc')->paginate(6);
        $pages = getPage($articles,6);
        return view('front.wap.video',compact('articles','pages'));
    }
    public function video_detail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        return view('front.wap.video_in2',compact('article','up_down'));
    }
    public function compus($id=28){
        $cates = Article::where('pid',11)->get();
        $article = Article::with('articles')->find($id);
        return view('front.wap.compus',compact('article','cates','id'));
    }
    public function compus_detail($id){
        $arti = Article::find($id);
        $article = Article::with('articles')->find($arti->pid);
        return view('front.wap.compus_in',compact('article'));
    }

    public function contact(){
        return view('front.wap.contact',compact('schools','classs'));
    }



}
