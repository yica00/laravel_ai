<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;

class Jd_accountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'account'=>['required','between:5,20',Rule::unique('jd_accounts')->ignore(Input::segment(2)?Input::segment(2):""),],
            'password'=>'required|between:6,20',
            'charge_password'=>'required|between:6,20',
            'email'=>'required|between:5,30',
            'email_password'=>'required|between:6,20',
            'qq'=>'digits_between:5,13|nullable',
            'ip'=>'between:8,15|nullable',
            'ip_location'=>'between:3,30|nullable',
            'phone'=>'digits_between:6,20|nullable',
            'simulator_phone'=>'digits:11|nullable',
            'imei'=>'between:3,20|nullable',
            'receiver_address'=>'between:3,30|nullable',
            'receiver_name'=>'between:2,10|nullable',
            'receiver_phone'=>'digits:11|nullable',
        ];
    }

    public function messages(){
        return[
            'account.required'=>'JD账号必须填写',
            'account.between'=>'JD账号在5到20位之间',
            'account.unique'=>'JD账号已经存在',
            'password.required'=>'账号密码必须填写',
            'password.between'=>'账号密码在6到20位之间',
            'charge_password.required'=>'支付密码必须填写',
            'charge_password.between'=>'支付密码在6到20位之间',
            'email.required'=>'邮箱账号必须填写',
            'email.between'=>'邮箱账号在5到30位之间',
            'email_password.required'=>'邮箱密码必须填写',
            'email_password.between'=>'邮箱密码在6到20位之间',
            'qq.digits_between'=>'qq必须是5到13位的数字',
            'ip.between'=>'ip必须8到15位',
            'ip_location.between'=>'ip地点必须3到30位',
            'phone.digits_between'=>'手机必须是6-20位数字',
            'simulator_phone.digits'=>'模拟手机必须是11位数字',
            'imei.between'=>'imei必须3到20位之间',
            'receiver_address.between'=>'收货人地址3到30位',
            'receiver_name.between'=>'收货人姓名2到10位',
            'receiver_phone.digits'=>'收货人电话必须是11位数字',
        ];
    }



}

