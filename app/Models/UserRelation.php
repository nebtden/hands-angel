<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRelation extends Model
{
    // table name
    protected $table = 'users_relations';

    public static  $status =[
        1=>'正常',
        0=>'关闭',
    ];


    public function apply_user(){
        return $this->hasMany('App\Models\User');
    }

    public function applied_user(){
        return $this->HasOne('App\Models\User');
    }


}
