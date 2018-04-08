<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','email','phone','message','team_id','order_time','ap_pm'];

    protected $hidden = ['created_at','updated_at','deleted_at'];
}
