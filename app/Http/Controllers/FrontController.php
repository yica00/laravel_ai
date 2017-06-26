<?php

namespace App\Http\Controllers;

use App\Models\Admin\Article;
use App\Models\Admin\Teams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
    public function index( Request $request ){
        $slides = $this->getSlides();
        $bases = $this->getBases();
        $cases = $this->getCases();
        $teams = $this->getTeams();

        return view('front.index',compact('slides','bases','cases','teams'));
    }

    public function getSlides(){
        $sliders = Article::select('thumbnail')->where('pid',1)->orderBy('id','desc')->get();
        return $sliders;
    }

    public function getBases(){
        $base1 = Article::select('thumbnail')->where('pid','14')->orderBy('id','desc')->get();
        $base2 = Article::select('thumbnail')->where('pid','15')->orderBy('id','desc')->get();
        $base3 = Article::select('thumbnail')->where('pid','16')->orderBy('id','desc')->get();
        return[$base1,$base2,$base3];
    }

    public function getCases(){
        $base1 = Article::select('comtent','thumbnail')->where('pid','17')->orderBy('id','desc')->get();
        return $base1;
    }

    public function getTeams(){
        $teams= Teams::select('photo','belong_to','name')->orderBy('id','desc')->get();
        return $teams;
    }

    public function about_us(){
        return view('front.about');
    }

    public function team(){
        return view('front.team');
    }

    public function honor(){
        return view('front.honor');
    }

    public function enterprise(){
        return view('front.enterprise');
    }

    public function parenting(){
        return view('front.parenting');
    }

    public function cs(){
        return view('front.cs');
    }

    public function camp(){
        return view('front.camp');
    }

    public function training(){
        return view('front.training');
    }

    public function base_xisan(){
        return view('front.base_xisan');
    }

    public function base_qingshan(){
        return view('front.base_qingshan');
    }

    public function base_guoleyuan(){
        return view('front.base_guoleyuan');
    }

    public function our_case(){
        return view('front.case');
    }

    public function plan(){
        return view('front.plan');
    }

    public function contact(){
        return view('front.contact');
    }

}
