<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\MessageRequest;
use App\Models\Admin\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Psy\Exception\RuntimeException;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::orderBy('id','desc')->paginate(20);
        $messages = $this->subSqlStr($messages);
        return view('admin.message',compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.message_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MessageRequest $request)
    {
//        if( !verifyCaptcha() ){
//            return back()->with('errors','验证码错误，请重试！');
//        }
        $ip = \Illuminate\Support\Facades\Request::getClientIp();
        $atic = Input::all();
        $atic['ip'] = $ip;
        $time = Carbon::now()->subHours(24);
        $messages = Message::where('ip',$ip)->whereDate('created_at','>',$time)->count();
        if( $messages > 1 ){
            return back()->with('errors','当前ip留言过多，请稍后再试');
        }
        if( isset($atic['address']) ){
            $atic['message'] = '地址：'.$atic['address'].'<br>风格：'.$atic['style'].'<br>消息详情：'.$atic['message'];
        }
//        if (isset($atic['amout'])){
//            $atic['message'] = '产品数量：'.$atic['amout'].'<br>产品名字：'.$atic['product'].'<br>留言详情：'.$atic['message'];
//        }
        $rel = Message::create($atic);
        if( $rel->wasRecentlyCreated ){
            return back()->with('errors','留言成功，我们会稍后与你联系');
        }
        return back()->withErrors();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = Message::find($id);
        $up_down = get_message_page($id);
        return view('admin.message_show',compact('message','up_down'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $message = Message::find($id);
        return view('admin.message_edit',compact('message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $atic = Input::except('_token','_method');
        $message = Message::find($id);
        $rel = $message->update($atic);
        if( $rel){
            return back()->with('errors','修改成功');
        }
        return back()->withErrors();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Message::find($id);
        if($article && $article->delete()){
            return back()->with('errors',"删除成功");
        }
        return back()->with('errors',"删除失败");
    }


    public function subSqlStr( $data ){
        for( $i=0;$i<count($data);$i++ ){
            $data[$i]->message = mb_substr($data[$i]->message,0,10,'utf8')."...";
        }
        return $data;
    }
}
