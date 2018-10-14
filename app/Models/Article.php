<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{



    //table name
    protected $table = 'articles';

    public static $types = [
        1=>'FAQ',
        2=>'FAQ',
    ];


}
