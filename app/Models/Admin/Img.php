<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Img extends Model
{
    use SoftDeletes;

    protected $fillable = ['url','blov','customer_id'];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function level(){
        return $this->belongsTo('App\Models\Admin\Customer','customer_id','id');
    }
}
