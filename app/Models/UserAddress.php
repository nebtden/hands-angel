<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Settings;
use App\Models\PrepareBox;
use App\Models\Seller;
use App\Models\Country;
use App\Models\SPackage;

class UserAddress extends Model
{
    // table name
    protected $table = 'user_address';

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public static function AddressToSender($address_id){
        $address = Self::where([
            'id'=>$address_id
        ])->select('real_name as sender_contactname','phone as sender_contactnumber','address as sender_address')->first()->toArray();
        return $address;
    }




}
