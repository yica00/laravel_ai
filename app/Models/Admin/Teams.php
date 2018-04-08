<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teams extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','education','title','work_time','photo','position','introduce','good_at','design_concept','comtent','class_id'];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function rcases(){
        return $this->hasMany('App\Models\Admin\Rcase','team_id','id');
    }

    public function item(){
        return $this->belongsTo('App\Models\Admin\Article','class_id','id');
    }
}

