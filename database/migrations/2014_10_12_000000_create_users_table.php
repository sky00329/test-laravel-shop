<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            
            //會員編號->主鍵且自動增加
            $table->id();
            //Email
            $table->string('email');
            //密碼
            $table->string('password');
            //帳號類型
            // -A :管理者  -G :一般會員
            $table->string('type',1)->default('G');
            //會員名稱
            $table->string('name');
            //時間戳記
            $table->timestamps();
            //鍵值索引

            $table->unique(['email'],'user_email_uk');

            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
