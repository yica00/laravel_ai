<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','blov','imgs','category_id','level_id','remark'];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function category(){
        return $this->belongsTo('App\Models\Admin\Category','category_id','id');
    }

    public function level(){
        return $this->belongsTo('App\Models\Admin\Level','level_id','id');
    }
}
