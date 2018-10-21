<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    //table name
    protected $table = 'articles';

    public static $types = [
        '0'=>'FAQ',
        '1'=>'视频',
        '2'=>'偷窥',
        '3'=>'文爱',
        '4'=>'手天使',
        '5'=>'公告',
    ];

    public static $user_types=[
        '1'=>'视频',
        '2'=>'偷窥',
        '3'=>'文爱',
        '4'=>'手天使',
    ];


}
