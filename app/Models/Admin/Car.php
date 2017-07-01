<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','displacement','photo','amount','category','price'];

    protected $hidden = ['created_at','updated_at','deleted_at'];
}
