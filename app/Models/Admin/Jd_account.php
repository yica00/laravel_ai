<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Jd_account extends Model
{
    protected $fillable = [ 'account','password',
        'charge_password','email','email_password','qq','ip',
        'ip_location','phone','simulator_phone','imei',
        'receiver_address','receiver_name','receiver_phone',
        'pc_cookie','mc_cookie','app_cookie'];

    protected $hidden = [ 'updated_at','deleted_at' ];

//    public function goodss(){
//        return $this->belongsToMany('App\Models\Admin\Goods');
//    }

}
