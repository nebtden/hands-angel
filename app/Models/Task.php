<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //类型  1：视频   2：偷窥   3：文爱    4：手天使
    public static $types = [
        '1'=>'shipin',
        '2'=>'toukui',
        '3'=>'wenai',
        '4'=>'shoutianshi',
    ];

    protected $table = 'tasks';

}
