<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SPackage extends Model
{
    protected $connection = 'transit';

    protected $table = 'transt_s_package_info';

    public  $timestamps = false;

}
