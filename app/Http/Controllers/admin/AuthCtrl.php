<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Rules\FullName;
use App\Rules\Password;
use App\Rules\UserName;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AuthCtrl extends Controller
{
    //
    public function showLogin(){
        return view('pages.auth-login');
    } 

    public function showRegister(){
        return view('pages.admin.auth-register');
    } 

    public function login(Request $request){
        
    }

    public function register(Request $request){

        Validator::validate($request->all(),
            [
                'admin_fullname'            => ['required', 'min:7', 'max:30', new FullName()],   //'regex:/\[^A-Za-z\-_ ]/'
                'admin_username'            => ['required', 'min:7', 'max:20', new UserName()],    //  | regex:/\w*$/'  , 'alpha_num'
                'admin_email'               => ['required', 'min:7', 'max:30', 'email'],    //'regix:/^\[a-z0-9\+_\-]+\.[a-z0-9\+_\-]+*@[a-z0-9\-]+\.+[a-z]{2,6}$/ix'
                'admin_password'            => ['required', 'min:7', 'max:20', new Password()],
                'confirm_admin_password'    => ['required', 'same:admin_password']
            ],
            [
                'admin_fullname.required'   => 'Name is required',
                'admin_fullname.min'        => 'Name must be at least 7 characters',
                'admin_fullname.max'        => 'Name must not exceed 30 characters',

                'admin_username.required'   => 'Username is required',
                'admin_username.min'        => 'Username must be at least 7 characters',
                'admin_username.max'        => 'Username must not exceed 20 characters',

                'admin_email.required'      => 'Email is required',
                'admin_email.min'           => 'Email must be at least 7 characters',
                'admin_email.max'           => 'Email must not exceed 20 characters',
                
                'admin_password.required'   => 'password is required',
                'admin_password.min'        => 'password must be at least 7 characters',
                'admin_password.max'        => 'password must be at most 20 characters',

                'confirm_admin_password.required'   => 'Password confirmation is required',
                'confirm_admin_password.same'       => 'Confirmation doesn\'t match password'
            ]
        );

        $user = new User();
        $user->name = $request->input('admin_username');
        $user->save();
    }

    public function reserPassword(){

    }

    public function logout(){

    }
}
