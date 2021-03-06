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
        $teams = $this->getTeam();
//        $classs = $this->getClass();
//        $works = $this->getWork();
//        $news = $this->getNews();
        return view('front.wap.index',compact('pics','projects','works','schools','qualitys','messages','news','stars','cases','newss','classs','teams'));
    }

    public function getTeam(){
        $teams = Article::find(75);
        return $teams;
    }

    public function getNews(){
        $articles = Article::where('pid',12)->orderBy('serial_number','desc')->orderBy('id','desc')->take(3)->get();
        return $articles;
    }
    public function getPic(){
        $Articles = Article::where('pid',72)->orderBy('serial_number','asc')
            ->get();
//        foreach ( $Articles as $k=>$Arti ){
//            if( $Arti->serial_number == 50 || $Arti->serial_number == 60 || $Arti->serial_number == 90){
//                $Articles[$k]->comtent = get_article_imgs($Arti->comtent,40);
//            }
//        }
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

    public function items( $id = 63  ){
        $cates = Article::where('pid',62)->get();
        $article = Article::with('articles')
            ->find($id);
        foreach ( $article->articles as $k=>$item ){
            if( $item->serial_number == 100 ){
                $sons = Article::with('articles')->find($item->id);
                foreach ( $sons->articles as $ks=>$items ){
                    $sons->articles[$ks] = get_article_imgs2($items->comtent,2);
                }
                $article->cases = $sons;
                unset( $article->articles[$k] );
            }
            if( $item->serial_number == 200 ){
                $sons = Article::find($item->id);
                $article->team = $sons;
                unset( $article->articles[$k] );
            }

        }
        $article->comtent = get_article_imgs2($article->comtent,2);
        return view('front.wap.item',compact('article','id','cates'));
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

    public function our_case( ){
//        return session('header_nav1');;
        $articles = Article::with('articles')->where('pid',4)->orderBy('serial_number','desc')
            ->orderBy('id','desc')->paginate(5);
        for ( $i=0; $i<count($articles);$i++ ){
            $arr = [];
            for ( $j=0; $j<count($articles[$i]->articles);$j++ ){
                $arr[] = get_article_imgs2($articles[$i]->articles[$j]->comtent,2);
            }
            $articles[$i]->cases = $arr;
        }
        $pages = getPage($articles,5);
        return view('front.wap.case',compact('articles','pages'));
    }
    public function case_detail($id){
        $article = Article::with('articles')->find($id);
        for ( $j=0; $j<count($article->articles);$j++ ){
            $arr[] = get_article_imgs2($article->articles[$j]->comtent,2);
        }
        $article->cases = $arr;
        $up_down = get_up_down_page($id,$article->pid);
        return view('front..wap.case_in',compact('article','up_down'));
    }

    public function team(){
        $teams = Teams::orderBy('id','asc')->get();
        return view('front.wap.team',compact('teams'));
    }
    public function team_detail($id){
        $team = Teams::find($id);
        $team->comtent = get_article_imgs2($team->comtent,10);
        return view('front.wap.team_in',compact('team'));
    }
    public function team_compus($id){
        $team = Teams::with(['rcases'=>function( $qurey ) use($id) {
            $qurey->where('cate',1)->where('team_id',$id)->take(8);
        }])->find($id);
        return view('front.wap.compus_in2',compact('team'));
    }

    public function equip(){
        $articles = Article::where('pid',9)->orderBy('serial_number','desc')
            ->orderBy('id','desc')->get();
        return view('front.wap.equip',compact('articles'));
    }
    public function equip_detail($id){
        $article = Article::find($id);
        return view('front.wap.equip_in',compact('article'));
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
        return view('front.wap.news',compact('articles','pages'));
    }
    public function new_detail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
//        $pid = $article->pid;
        return view('front.wap.news_in',compact('pid','article','up_down'));
    }

    public function brand(){
        $article = Article::find(7);
        return view('front.wap.brand',compact('article'));
    }

    public function about(){
        $article = Article::with('teams')->find(8);
        return view('front.wap.about',compact('article'));
    }
    public function culture(){
        $article = Article::find(8);
        return view('front.wap.brand',compact('article'));
    }
    public function environ(){
        $article = Article::find(10);
        $article->comtent = get_article_imgs2($article->comtent,40);
        return view('front.wap.environ',compact('article'));
    }

    public function honor(){
        $article = Article::find(11);
        $article->comtent = get_article_imgs2($article->comtent,40);
        return view('front.wap.environ',compact('article'));
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
