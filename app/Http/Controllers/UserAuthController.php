<?php

//命名空間
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Validator; //驗證器

class UserAuthController extends Controller {
    //註冊頁
    public function signUpPage(){
        $binding = [
            'title' => '註冊',
        ];
        return view('auth.signUp',$binding);
    }

    //處裡註冊資料
    public function signUpProcess(){
        //接收輸入資料
        $input = request()->all();
        
        //驗證規則
        $rule = [
            
            //暱稱
            'nickname' => [
                'required',
                'max:50'
            ],
            
            //Email
            'email' => [
                'required',
                'max:150',
                'email',
            ],

            //密碼
            'password' => [
                'required',
                'same:password_confirmation',
                'min:6',
            ],

            //密碼驗證
            'password_confirmation' => [
                'required',
                'min:6',
            ],

            //帳號類型
            'type' => [
                'required',
                'in:G,A'
            ],

        ];

        //驗證資料
        $validator = validator::make($input,$rule);

        if($validator->fails()){
            //資料驗證錯誤
            return redirect('/user/auth/sign-up')
                ->withErrors($validator);
        }
    }
}