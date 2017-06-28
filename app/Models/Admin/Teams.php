<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teams extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','belong_to','photo','introduce','iterm','phone'];

    protected $hidden = ['created_at','updated_at','deleted_at'];


}

