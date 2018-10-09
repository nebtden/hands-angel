<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShippingMethod extends Model
{
    //
    protected $table='shipping_method';

    public function country(){
        return $this->hasOne('App\Models\Country');
    }

    public function courier(){
        return $this->belongsTo('App\Models\Courier');
    }
}
