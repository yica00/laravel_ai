<?php

namespace App\Http\Controllers;

use App\Models\Admin\Article;
use App\Models\Admin\Teams;
use Illuminate\Http\Request;

class ApiController extends Controller
{


    public function up_user_info(UserUpRequest $request)
    {
        $atic = Input::except('_token','_method');
        $user = User::find(Auth::id());
        $rel = $user->update($atic);
        if( $rel){
            return back()->with('errors','修改成功');
        }
        return back()->withErrors();
    }



}
