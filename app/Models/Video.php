<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //类型  1：视频   2：偷窥   3：文爱    4：手天使
    public static $types = [
        '1'=>'视频',
//        '2'=>'偷窥',
//        '3'=>'文爱',
//        '4'=>'手天使',
//        '5'=>'其他',
    ];



    protected $table = 'videos';

}
