<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['name','s_province','phone','s_city','company','fix_phone'];

    protected $hidden = ['created_at','updated_at','deleted_at'];
}
