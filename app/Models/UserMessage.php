<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserMessage extends Model
{
    protected  $fillable = ['id'];

    public static $sex = [
        '1'=>'男',
        '2'=>'女',
    ];
    public static $married = [
        '0'=>'没有结婚',
        '1'=>'已经结婚',
    ];
    public static $hav_sex = [
        '0'=>'没有',
        '1'=>'有',
    ];


    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function province(){
        return $this->belongsTo('App\Models\AreaProvince');
    }

    public function city(){
        return $this->belongsTo('App\Models\AreaCity');
    }




}
