<?php

//命名空間
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Validator; //驗證器
use Hash;
use App\Shop\Entity\User; //使用者Eloquent ORM Model

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
                ->withErrors($validator)
                ->withInput();
        }

        //密碼加密
        $input['password'] = Hash::make($input['password']);

        //新增會員資料
        $user = User::create($input);

        //寄送註冊通知信
        $mail_binding = [
            'nickname' => $input['nickname']
        ];
/*
        Mail::send('email.signUoEmailNotification',$mail_binding,function($mail) use($input){
            //收件人
            $mail->to($input['email']);
            //寄件人
            $mail->from('kj@kejyun.com');
            //郵件主旨
            $mail->subject('恭喜註冊 Shop Laravel 成功');

        });
*/
        //重新導向到登入頁
        return redirect('/user/auth/sign-in');
    }
}