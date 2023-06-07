<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFacebookIdToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // facebook_id 欄位到password 欄位後方
            $table->string('facebook_id',30)->nullable()->after('password');

            //建立索引
            $table->index(['facebook_id'],'user_fb_idx');
        });
    }

    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    //復原資料庫欄位
     public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //移除欄位
            $table->dropColumn('facebook_id');
        });
    }
}
