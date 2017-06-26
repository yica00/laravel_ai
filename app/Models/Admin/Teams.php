<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $fillable = ['name','belong_to','photo','introduce','iterm','phone'];

    protected $hidden = ['created_at','updated_at','deleted_at'];


}

