<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $seting = readJson();
        return view('front.index',compact('seting'));
    }
}
