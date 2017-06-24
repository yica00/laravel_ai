<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Evaluate extends Model
{
    protected $fillable = ['detail','goods_id'];

    protected $hidden = ['created_at','updated_at','deleted_at'];

}
