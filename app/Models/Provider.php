<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $connection = 'transit';

    protected $table = 'transt_s_provider_info';

    public  $timestamps = false;

}
