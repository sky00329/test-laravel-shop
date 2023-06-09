<?php

namespace App\Shop\Entity;

Use Illuminate\Database\Eloquent\Model;

class User extends Model{
    //資料表名稱
    protected $table = 'users'; //資料表

    //主鍵名稱
    protected $primaryKey ='id';

    //可以大量指定異動的欄位
    protected $fillable = [
        "email",
        "password",
        "type",
        "nickname",
    ];
}