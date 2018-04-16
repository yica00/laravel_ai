<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    protected $table="categorys";

    use SoftDeletes;

    protected $fillable = ['name'];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function customers(){
        return $this->hasMany('App\Models\Admin\Customer','category_id','id');
    }
}
