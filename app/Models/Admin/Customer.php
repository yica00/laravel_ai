<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','type','level','blov','imgs'];

    protected $hidden = ['created_at','updated_at','deleted_at'];
}
