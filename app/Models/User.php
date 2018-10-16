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

    public function store(){
        return $this->hasMany('App\Models\Seller');
    }

    public function client(){
        return $this->hasOne('App\Models\Client');
    }

    public function address(){
        return $this->hasMany('App\Models\UserAddress');
    }




}
