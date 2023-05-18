<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchandiseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //執行資料庫異動
    public function up()
    {
        Schema::create('merchandise', function (Blueprint $table) {
            //商品編號
            $table->id();

            //用於標記商品狀態，以上架商品才能被消費者看到
            // -C : 建立中  -S : 可販售
            $table->string('status',1)->default('C');

            //商品名稱
            $table->string('name',80)->nullable();//允許空值
            //商品英文名稱
            $table->string('name_en',80)->nullable();//允許空值

            //商品介紹
            $table->text('introduction');
            //商品英文介紹
            $table->text('introduction_en');

            //商品照片
            $table->string('introduction',50)->nullable();
            //價格
            $table->integer('price')->default(0);
            //剩餘數量
            $table->integer('remain_count')->default(0);
            //時間戳記
            $table->timestamps();

            //索引設定
            $table->index(['status'],'merchandise_status_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('merchandise');
    }
}
