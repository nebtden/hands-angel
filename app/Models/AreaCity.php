<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AreaCity extends Model
{
    //table name
    protected $table = 'area_cities';



    public static function options($id){
        if (! $self = static::find($id)) {
            return [];
        }

        return $self->pluck('name', 'id');
    }
}
