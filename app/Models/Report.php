<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{

    protected $table = 'reports';

    public $_type_list = [
        1=>'充值费用',
        2=>'头程费用'
    ];

    public $timestamps = false;



}
