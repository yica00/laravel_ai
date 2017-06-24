<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Scalp_order extends Model
{
    protected $fillable = ['jd_account_id','ip','ip_location','goods_id','evaluate_id','evaluate','query_time','has_evaluate'];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function jd_account(){
        return $this->belongsTo('App\Models\Admin\Jd_account');
    }

    public function goods(){
        return $this->belongsTo('App\Models\Admin\Goods');
    }


}
