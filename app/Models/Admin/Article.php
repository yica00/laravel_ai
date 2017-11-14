<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    protected $fillable = ['title','thumbnail','comtent','pid','is_nav','link','serial_number','introduce'];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function articles(){
        return $this->hasMany('App\Models\Admin\Article','pid','id');
    }

    public function article(){
        return $this->belongsTo('App\Models\Admin\Article','pid','id');
    }

    public function order_lists(){
        return $this->belongsTo('App\Models\Admin\Order_list','article_id','id');
    }

    public function teams(){
        return $this->hasMany('App\Models\Admin\Teams','work_age','id');
    }

    public function rcases(){
        return $this->hasMany('App\Models\Admin\Rcase','style_id','id');
    }
}
