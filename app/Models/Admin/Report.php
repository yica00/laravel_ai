<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    use SoftDeletes;

    protected $fillable = ['title','card','thumbnail'];

    protected $hidden = ['created_at','updated_at','deleted_at'];
}
