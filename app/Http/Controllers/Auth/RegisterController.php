<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/member';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => array('unique:users','regex:/^1(3|4|5|7|8)[0-9]\d{8}$/'),
//            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
//            'rel_name' => 'required|string|max:20',
//            'phone' => array('regex:/^1(3|4|5|7|8)[0-9]\d{8}$/'),
        ],[
           'name.regex' => "电话号码不正确",
           'name.unique' => "手机号已经存在",
           'name.required' => "用户名必须填写",
           'name.max' => "用户名最多20字符",
           'password.required' => "密码必须填写",
           'password.min' => "密码最少6位",
           'password.confirmed' => "两次密码不一致",
           'rel_name.required' => "真实姓名必须填写",
           'rel_name.max' => "真实姓名最多20字符",
           'phone.regex' => "电话号码不正确",
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
//            'email' => $data['email'],
            'password' => bcrypt($data['password']),
//            'rel_name' => $data['rel_name'],
//            'phone' => $data['phone'],
        ]);
    }
}
