<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //table name
    protected $table = 'categories';

    public static $_type_list = [
        1=>'FAQ',
    ];


}
