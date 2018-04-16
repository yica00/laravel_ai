<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Level extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function customers(){
        return $this->hasMany('App\Models\Admin\Customer','level_id','id');
    }

}
