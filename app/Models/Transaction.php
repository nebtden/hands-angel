<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';

    public function admin_user(){

        return $this->hasOne('\Encore\Admin\Auth\Database\Administrator','id','admin_user_id');

    }


    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}