<?php

namespace App\Shop\Entity;

use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model{
    //資料表名稱
    protected $table = 'merchandise';
    //主鍵名稱
    protected $primaryKey = 'id';
    //可大量指定異動的欄位
    protected $fillable =[
        "id",
        "status",
        "name",
        "name_en",
        "introduction_merchandise",
        "introduction_merchandise_en",
        "introduction",
        "price",
        "remain_count",
    ];
}