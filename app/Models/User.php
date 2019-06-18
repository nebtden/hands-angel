<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // table name
    protected $table = 'users';

    public static  $status =[

        1=>'通过',
        0=>'关闭',
        -1=>'没通过',
    ];



    public function address(){
        return $this->hasMany('App\Models\UserAddress');
    }

    public function message(){
        return $this->HasOne('App\Models\UserMessage');
    }


}
