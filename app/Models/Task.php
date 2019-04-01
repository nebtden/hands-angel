<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //类型  1：视频   2：偷窥   3：文爱    4：手天使
    public static $types = [
        '1'=>'视频',
//        '2'=>'偷窥',
//        '3'=>'文爱',
//        '4'=>'手天使',
//        '5'=>'其他',
    ];

    public static $status = [
        -1 =>'关闭',
        0  =>'未审核',
        1  =>'通过',
        2  =>'未通过',
    ];

    protected $table = 'tasks';

}
