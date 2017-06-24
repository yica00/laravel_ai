<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public $timestamps= false;

    protected $fillable = ['id','name','pid'];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function areas(){
        return $this->hasMany('App\Models\Admin\Area','pid','id');
    }
}
