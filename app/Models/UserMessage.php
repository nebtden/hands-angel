<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserMessage extends Model
{

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


}
