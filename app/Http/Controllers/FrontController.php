<?php

namespace App\Http\Controllers;

use App\Models\Admin\Article;
use App\Models\Admin\Car;
use App\Models\Admin\Message;
use App\Models\Admin\Order_list;
use App\Models\Admin\Rcase;
use App\Models\Admin\Teams;
use function foo\func;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        $sliders = $this->getSliders();
//        $about = $this->getAbout();
        $cases = $this->getCases();
        $classs = $this->getHouse();
        $teams = $this->getTeam();
//        $qualitys = $this->getQquality();
        $projects = $this->getProject();
        $schools = $this->getWorker();
        $works = $this->getGuide();
        $newss= $this->getNews();
//        $stars = $this->getService();
//        $articles = Article::where('pid',26)->get();
//        $messages = Message::orderBy('id','desc')->take(20)->get();
        return view('front.home',compact('articles','projects','works','schools','qualitys','messages','sliders','stars','cases','newss','classs','teams'));
    }


    public function getLink(){
        $Articles = Article::where('pid',26)->orderBy('serial_number','desc')->orderBy('id','desc')->take(14)->get();
        return $Articles;
    }
    public function getQquality(){
        $Articles = Article::where('pid',4)->orderBy('serial_number','desc')->get();
        return $Articles;
    }
    public function getHouse(){
        $Articles = Article::where('pid',2)->get();
        $ids = getIds($Articles);
        $Articles = Article::whereIn('pid',$ids)->orderBy('serial_number','desc')->get();
        return $Articles;
    }
    public function getVitness(){
        $Articles = Article::where('pid',28)->orderBy('serial_number','desc')->orderBy('id','desc')->take(6)->get();
        return $Articles;
    }
    public function getGuide(){
        $Articles = Article::where('pid',5)->orderBy('serial_number','desc')->orderBy('id','desc')->take(10)->get();
        return $Articles;
    }
    public function getProject(){
        $Articles = Article::where('pid',38)->orderBy('serial_number','desc')->orderBy('id','desc')->take(4)->get();
        return $Articles;
    }
    public function getNews(){
        $articles = Article::where('pid',12)->orderBy('serial_number','desc')->orderBy('id','desc')->take(4)->get();
        return $articles;
    }
    public function getActive(){
        $articles = Article::where('pid',5)->orderBy('serial_number','desc')->orderBy('id','desc')->take(6)->get();
        return $articles;
    }
    public function getDish(){
        $articles = Article::where('pid',3)->orderBy('serial_number','desc')->orderBy('id','desc')->take(10)->get();
        return $articles;
    }
    public function getStore(){
        $articles = Article::where('pid',4)->orderBy('serial_number','desc')->orderBy('id','desc')->take(10)->get();
        return $articles;
    }
    public function getEnv(){
        $articles = Article::find(9);
        $articles->comtent = get_article_imgs( $articles->comtent,20 );
        return $articles;
    }
    public function getAbout(){
        $articles = Article::find(33);
        return $articles;
    }
    public function getService(){
        $articles = Article::where('pid',4)->orderBy('serial_number','desc')->orderBy('id','asc')->take(12)->get();
        return $articles;
    }
    public function getCases(){
        $articles = Rcase::select('id','title','thumbnail','serial_number')
            ->orderBy('serial_number','desc')->orderBy('id','desc')->take(6)->get();
        return $articles;
    }
    public function getBrands(){
        $article = Article::where('pid',6)->orderBy('serial_number','desc')
            ->orderBy('id','desc')->take(12)->get();
        return $article;
    }
    public function getTeam(){
        $teams = Article::find(59);
        return $teams;
    }
    public function getWorker(){
        $teams = Article::with('articles')->where('pid',11)->get();
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
        $sons = Article::select('thumbnail','link','id','pid')->where('pid',56)->get();
        return $sons;
    }
    public function getTeams()
    {
        $teams = Teams::select('id', 'photo', 'belong_to', 'name','iterm')->orderBy('id', 'desc')->get();
        return $teams;
    }

    public function items( $id = 15  ){
        $article = Article::with('articles')->find($id);
        for( $i=0;$i<count($article->articles);$i++ ){
            if ( $article->articles[$i]->serial_number == 800 ){
                $son = Article::with('articles')->find($article->articles[$i]->id);
                foreach ( $son->articles as $k=>$arti ){
                    if( $arti->serial_number > 99 ){
                        $pattern = "/(?:\/Uploads).*?(?=\")/";
                        preg_match_all($pattern,$son->articles[$k]->comtent,$matches);
                        $arr[] = $matches[0];
                        $son->cases = $arr;
                    }
                }
            }else{
                $son = Article::with('articles')->find($article->articles[$i]->id);
            }
            $id = "s".$article->articles[$i]->serial_number;
            $article->$id = $son;
        }
        return view('front.item',compact('article'));
    }

    public function item_case($id){
        $article = Article::find($id);
        $articles = Article::where('pid',$article->pid)->get();
        foreach ( $articles as $k=>$arti ){
            if( $arti->serial_number > 99 ){
                $pattern = "/(?:\/Uploads).*?(?=\")/";
                preg_match_all($pattern,$arti->comtent,$matches);
                $arr[] = $matches[0];
                $article->cases = $arr;
            }
        }
        return view('front.item_case',compact('article'));
    }

    public function question_detail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        return view('front.question_in',compact('article','up_down'));
    }

    public function item_detail($id){
        $article = Article::with('articles')->find($id);
        foreach ( $article->articles as $k=>$item ){
            if( $item->serial_number == 300 ){
                $article->classs = Article::with('articles')->find($item->id);
                unset( $article->articles[$k] );
            }
        }
        return view('front.item_in',compact('article'));
    }

    public function about(){
        $article = Article::with('teams')->find(8);
        return view('front.about',compact('article'));
    }
    public function culture(){
        $article = Article::find(9);
        return view('front.about',compact('article'));
    }
    public function brand(){
        $self = Article::find(2);
        $articles = Article::with('articles')->whereIn('id',[7,8,9,10,11])
            ->orderBy('serial_number','desc')->orderBy('id','asc')->get();
        foreach ( $articles as $k=>$arti ){
            if( $k>2 ){
                $articles[$k]->comtent = get_article_imgs($arti->comtent,20);
            }
        }
        return view('front.brand',compact('articles','self'));
    }
    public function video(){
        $articles = Article::where('pid',10)->orderBy('serial_number','desc')->orderBy('id','desc')->paginate(6);
        $pages = getPage($articles,6);
        return view('front.video',compact('articles','pages'));
    }
    public function video_detail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        return view('front.video_in',compact('article','up_down'));
    }

    public function menu_list(){
        $articles = Article::where('pid',3)->orderBy('serial_number','desc')->orderBy('id','desc')->paginate(9);
        $pages = getPage($articles,9);
        return view('front.menu',compact('articles','pages'));
    }

    public function store_list(){
        $articles = Article::where('pid',4)->orderBy('id','desc')->paginate(3);
        $pages = getPage($articles,3);
        return view('front.store',compact('articles','pages'));
    }
    public function store_dedail($id){
        $article = Article::find($id);
        $article->comtent = get_article_imgs($article->comtent,40);
        return view('front.store_in',compact('article'));
    }

    public function star(){
        $articles = Article::where('pid',4)->orderBy('serial_number','desc')->orderBy('id','desc')->paginate(6);
        $pages = getPage($articles,6);
        return view('front.star',compact('articles','pages'));
    }
    public function star_dedail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        return view('front.star_in',compact('article','up_down'));
    }

    public function work(){
        $articles = Article::where('pid',5)->orderBy('serial_number','desc')->orderBy('id','desc')->paginate(6);
        $pages = getPage($articles,6);
        return view('front.work',compact('articles','pages'));
    }
    public function work_dedail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        return view('front.work_in',compact('article','up_down'));
    }

    public function compus($id=28){
        $cates = Article::where('pid',11)->get();
        $article = Article::with('articles')->find($id);
        return view('front.compus',compact('article','cates','id'));
    }


    public function active_list(){
        $articles = Article::where('pid',5)->orderBy('id','desc')->paginate(3);
        $pages = getPage($articles,3);
        return view('front.active',compact('articles','pages'));
    }

    public function active_dedail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        return view('front.active_in',compact('article','up_down'));
    }

    public function join_detail( $id=13 ){
        $article = Article::find($id);
        return view('front.join',compact('article','id'));
    }

    public function join_suply(){
        return view('front.suply');
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
        $intros = Article::where('pid',5)->get();
        $teams = Teams::orderBy('id','asc')->get();
//        $pages = getPage($teams,10);
        return view('front.team',compact('teams','intros'));
    }
    public function team_supervise(){
        $teams = Teams::where('cate',2)->orderBy('id','asc')->paginate(8);
        $pages = getPage($teams,8);
        $id =2;
        return view('front.worker',compact('teams','pages','id'));
    }
    public function team_detail($id){
        $team = Teams::find($id);
        $team->comtent = get_article_imgs2($team->comtent,10);
        return view('front.team_in',compact('team'));
    }
    public function worker_detail($id){
        $team = Teams::with('rcases')->find($id);
        if( $team->cate == 1 ){
            return view('front.team_in',compact('team'));
        }
        return view('front.worker_in',compact('team'));
    }

    public function honor(){
        $articles = Article::where('pid',22)->get();
        return view('front.honor',compact('articles'));
    }
    public function env(){
        $articles = Article::where('pid',12)->get();
        return view('front.honor',compact('articles'));
    }


    public function news( ){
        $articles = Article::where('pid',12)->orderBy('serial_number','desc')->orderBy('id','desc')->paginate(6);
        $pages = getPage($articles,6);
        return view('front.news',compact('articles','pages'));
    }
    public function new_detail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        $pid = $article->pid;
        return view('front.news_in',compact('pid','article','up_down'));
    }


    public function product( $id=0 ){
//        $cid = Input::get('cid');
//        $tid = Input::get('tid');
//        $seconds = Article::where('pid',$id)->orderBy('serial_number','desc')->orderBy('id','asc')->get();
//        if( !$cid ){
//            $cid = $seconds[0]->id;
//        }
        $thirds = Article::where('pid',3)->orderBy('id','asc')->first();
        if( !$id ){
            $id = $thirds->id;
        }
        $title = Article::find($id);
        $articles = Article::where('pid',$id)->orderBy('serial_number','desc')
            ->orderBy('id','asc')->paginate(9);
        $pages = getPage($articles,9);
        return view('front.product',compact('articles','pages','id','thirds','title'));
    }
    public function product_detail($id){
        $article = Article::find($id);
        $article->comtent = get_article_imgs($article->comtent,30);
        $up_down = get_up_down_page($id,$article->pid);
//        $third = Article::find($article->pid);
//        $second = Article::find($third->pid);
        $pid = $article->pid;
        return view('front.product_in',compact('article','pid','up_down'));
    }


    public function doctor(){
        $nav = 4;
        $articles = Article::where('pid',4)->get();
        $article = Article::find(4);
        return view('front.doctor',compact('nav','articles','article'));
    }


    public function quality( $id=11 ){
        $article = Article::find($id);
        return view('front.quality',compact('article','id'));
    }

    public function project(){
        $articles = Article::where('pid',5)->orderBy('serial_number','desc')
            ->orderBy('id','asc')->paginate(6);
        $pages = getPage($articles,6);
        return view('front.project',compact('articles','pages'));
    }
    public function project_detail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        return view('front.project_in',compact('article','up_down'));
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
        return view('front.case',compact('articles','pages'));
    }
    public function case_detail($id){
        $article = Article::with('articles')->find($id);
        for ( $j=0; $j<count($article->articles);$j++ ){
            $arr[] = get_article_imgs2($article->articles[$j]->comtent,2);
        }
        $article->cases = $arr;
        $up_down = get_up_down_page($id,$article->pid);
        return view('front.case_in',compact('article','up_down'));
    }

    public function guide( $id = 16 ){
        $articles = Article::where('pid',$id)->orderBy('serial_number','desc')->orderBy('id','desc')->paginate(8);
        $pages = getPage($articles,8);
        return view('front.guide',compact('articles','id','pages'));
    }
    public function guide_detail($id){
        $article = Article::find($id);
        $up_down = get_up_down_page($id,$article->pid);
        $pid = $article->pid;
        return view('front.guide_in',compact('article','up_down','pid'));
    }

    public function offer(){
        $articles = Article::where('pid',26)->get();
        $messages = Message::orderBy('id','desc')->take(20)->get();
        $num = Message::count();
        return view('front.order',compact('articles','messages','num'));
    }

    public function budge(){
        return view('front.budge');
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
        $schools = Article::where('pid',11)->get();
        $classs = Article::where('pid',2)->get();
        return view('front.contact',compact('schools','classs'));
    }
    public function message(){
        $schools = Article::where('pid',11)->get();
        $classs = Article::where('pid',2)->get();
        return view('front.online',compact('schools','classs'));
    }
    public function way()
    {
        return view('front.way');
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
