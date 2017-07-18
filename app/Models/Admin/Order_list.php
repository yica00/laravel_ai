<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order_list extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','address','order_data','category','parameter','amount','organization','article_id'];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function article(){
        return $this->belongsTo('App\Models\Admin\Article','article_id','id');
    }
}
