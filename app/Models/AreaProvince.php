<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AreaProvince extends Model
{
    //table name
    protected $table = 'area_provinces';

    public  $timestamps = false;

    public function country(){
        return $this->belongsTo('App\Models\Country');
    }

    public static function options($id){
        if (! $self = static::find($id)) {
            return [];
        }

        return $self->pluck('name', 'id');
    }
}
