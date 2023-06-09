<?php
namespace App\Shop\Entity;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model{
    //資料表名稱
    protected $table = 'transaction';
    //主鍵名稱
    protected $primaryKey = 'id';

    //指定大量異動的欄位
    protected $fillable =[
        "id",
        "user_id",
        "merchandise_id",
        "price",
        "buy_count",
        "total_price",
    ];
}