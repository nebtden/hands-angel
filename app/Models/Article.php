<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //table name
    protected $table = 'articles';

    public static $_type_list = [
        1=>'FAQ',
    ];


}
