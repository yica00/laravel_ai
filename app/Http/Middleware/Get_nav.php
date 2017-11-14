<?php

namespace App\Http\Middleware;

use App\Models\Admin\Article;
use Closure;

class Get_nav
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if( !session('header_nav') ){
            $articles = Article::with(array('articles'=>function( $query ){
                $query->select('id','pid','title','serial_number','link')->where('is_nav','1');
            }))
                ->select('id','pid','title','serial_number','link','introduce')->where('pid','0')->where('is_nav','1')
                ->orderBy('serial_number','asc')->orderBy('id','asc')->get();
            session(['header_nav' =>$articles]);
        }
        $arr= explode('/',\Illuminate\Support\Facades\URL::current());
        $str = "";
        if( count($arr) > 3 ){
            $str = "/".$arr[3];
        }
        session(['urls' =>$str]);

        if( !session('links')  ){
            $Articles = Article::where('pid',13)->orderBy('serial_number','desc')->orderBy('id','desc')->take(14)->get();
            session(['links' =>$Articles]);
        }

        if( !session('meili')  ){
            $schools = Article::where('pid',11)->get();
            $classs = Article::where('pid',2)->get();
            session(['meili' =>[$schools,$classs]]);
        }
        return $next($request);
    }
}
