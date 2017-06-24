<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];

    protected $hidden = ['updated_at','deleted_at'];

    public function goodss(){
        return $this->belongsToMany('App\Models\Admin\Goods');
    }
}
