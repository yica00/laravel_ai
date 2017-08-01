<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teams extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','education','title','work_age','photo','introduce','good_at','design_concept','production'];

    protected $hidden = ['created_at','updated_at','deleted_at'];


}

