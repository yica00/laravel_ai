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
                $query->select('id','pid','title','serial_number','link','thumbnail')->where('is_nav','1');
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

        if( !session('header_nav1') ){
            $cats = Article::where('pid',3)->orderBy('serial_number','desc')->get();
            for ( $i=0;$i<count($cats);$i++ ){
//                $articles = Article::with(array('articles'=>function( $query ){
//                    $query->select('id','pid','title','serial_number','link')->where('is_nav','0');
//                }))
//                    ->select('id','pid','title','serial_number','link','introduce','comtent')->where('pid',$cats[$i]->id)
//                    ->where('serial_number','1500')
//                    ->orderBy('serial_number','asc')->orderBy('id','asc')->get();
                $cats[$i]->comtent = get_article_imgs($cats[$i]->comtent,3);
//                $cats[$i]->articles = $articles;
            }
            session(['header_nav1' =>$cats]);
        }

        if( !session('header_nav2') ){
            $cats = Article::where('pid',62)->orderBy('serial_number','desc')->get();
            for ( $i=0;$i<count($cats);$i++ ){
                $cats[$i]->comtent = get_article_imgs($cats[$i]->comtent,3);
            }
            session(['header_nav2' =>$cats]);
        }

        return $next($request);
    }
}
