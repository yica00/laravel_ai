<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rcase extends Model
{
    use SoftDeletes;

    protected $fillable = ['title','thumbnail','comtent','is_nav','serial_number','style_id','house_id','team_id'];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function house(){
        return $this->belongsTo('App\Models\Admin\Article','house_id','id');
    }
    public function style(){
        return $this->belongsTo('App\Models\Admin\Article','style_id','id');
    }

    public function team(){
        return $this->belongsTo('App\Models\Admin\Teams','team_id','id');
    }
}
