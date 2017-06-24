<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $table = 'goodss';

    protected $fillable = ['skuid','search_key','shop_id','price','full_title','shot_title','stock'];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function tags(){
        return $this->belongsToMany('App\Models\Admin\Tag');
    }

//    public function jd_accounts(){
//        return $this->hasManyThrough(
//            'App\Models\Admin\Jd_account',
//            'App\Models\Admin\Scalp_order'
//            ,'jd_account_id','id','goods_id'
//            );
//    }

    public function scalp_orders(){
        return $this->hasMany('App\Models\Admin\Scalp_order');
    }


}
