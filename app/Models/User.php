<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // table name
    protected $table = 'users';

    public static  $status =[
//        0=>'the first vessel',
        1=>'正常',
        0=>'关闭',
    ];



    public function address(){
        return $this->hasMany('App\Models\UserAddress');
    }

    public function message(){
        return $this->HasOne('App\Models\UserMessage');
    }


}
