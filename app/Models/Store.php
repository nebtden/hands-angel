<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{

    protected $table = 'sellers';

    public $timestamps = false;

    public function user(){
       return $this->belongsTo('App\Models\User');
    }

    public function type(){
        return $this->hasOne('App\Models\Client','id','type_id');
    }

    public function country(){
        return $this->belongsTo('App\Models\Country','type_id','id');
    }

    public function client(){
        return $this->hasOne('App\Models\Client','id','type_id');
    }

}
