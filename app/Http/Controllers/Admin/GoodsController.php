<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GoodsRequest;
use App\Models\Admin\Goods;
use App\Models\Admin\Jd_account;
use App\Models\Admin\Scalp_order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class GoodsController extends Controller
{
    /**
     * 列表
     */
    public function index(){
        $goodss = Goods::orderBy('id','desc')->paginate(10);
        return view('admin.goods',compact('goodss'));
    }

    /**
     * 展示一条数据
     */
    public function show($id){

    }

    /**
     * 展示新增页面
     */
    public function create(){
        return view('admin.goods_create');
    }

    /**
     * 新增
     */
    public function store( GoodsRequest $request ){
        $rel = Goods::create(Input::all());
        if($rel->wasRecentlyCreated) {
            return back()->with('errors','添加成功');
        }
        return back()->withErrors();
    }

    /**
     * 编辑页面
     */
    public function edit($id){
        $goods = Goods::find($id);
        if(!$goods){
            return back()->with('errors','无此数据');
        }
        return view('admin.goods_create',compact('goods'));
    }

    /**
     * 保存编辑
     */
    public function update($id,GoodsRequest $request){
        $goods = Goods::find($id);
        if(!$goods){
            return back()->with('errors',"无此数据");
        }
        $rel = $goods->update(Input::except('_method','_token'));
        if($rel){
            return back()->with('errors',"更新成功");
        }
        return back()->with('errors',"更新失败");
    }

    /**
     * 删除数据
     */
    public function destroy($id){
        $goods = Goods::find($id);
        if($goods&&$goods->delete()){
            return back()->with('errors',"删除成功");
        }
        return back()->with('errors',"删除失败");
    }

    /**
     * 获取可刷账户
     */
    public function get_scalpable_ids($skuid){
        $data = readJson();
        $week = $data['week'];
        $month = $data['month'];
        $shop_month = $data['shop_month'];
        $goods = Goods::where('skuid',$skuid)->first();
        if(!$goods){
            return ['code'=>4001];
        }
        $time7 = Carbon::now()->addDays(-7)->toDateString();
        $time30 = Carbon::now()->addDays(-30)->toDateString();
        $id7 = DB::select("(select jd_account_id,count(*) as counts from scalp_orders where created_at>$time7 group by jd_account_id HAVING counts >$week )");
        $id30 = DB::select("(select jd_account_id,count(*) as counts from scalp_orders where created_at>$time30 group by jd_account_id HAVING counts >$month )");
        $id_shop30 = DB::select("(select jd_account_id,count(scalp_orders.jd_account_id) as counts from scalp_orders left join goodss 
        on scalp_orders.goods_id=goodss.id and goodss.shop_id=$goods->shop_id and scalp_orders.created_at>$time30 group by jd_account_id HAVING counts >$shop_month )");

        $id7 = getIds( $id7 );
        $id30 = getIds( $id30 );
        $id_shop30 = getIds( $id_shop30 );
        $array = array_unique(array_collapse([$id7, $id30, $id_shop30]));
        $jd_accounts = Jd_account::select('*')
            ->whereNotIn('id',$array)
            ->paginate(50);
        $arr = $jd_accounts->toArray();
        return getRandom($arr['data']);


    }


}
