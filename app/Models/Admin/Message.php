<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['name','email','phone','message','ip'];

    protected $hidden = ['created_at','updated_at','deleted_at'];
}
