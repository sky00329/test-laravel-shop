<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layout.master');
});
// 使用者

Route::group(['prefix' => 'user'],function(){
    // 使用者驗證
    Route::group(['prefix' => 'auth'],function(){
        //使用者註冊頁面
        Route::get('/sign-up',[\App\Http\Controllers\UserAuthController::class,'signUpPage']);

        //使用者資料新增
        Route::post('/sign-up',[\App\Http\Controllers\UserAuthController::class,'signUpProcess']);
    });
});