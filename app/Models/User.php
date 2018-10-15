<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // table name
    protected $table = 'users';

    public static  $status =[
//        0=>'the first vessel',
        1=>'正常',
        0=>'关闭',
    ];

    public function store(){
        return $this->hasMany('App\Models\Seller');
    }

    public function client(){
        return $this->hasOne('App\Models\Client');
    }

    public function address(){
        return $this->hasMany('App\Models\UserAddress');
    }

    public static function NiloFreightTotal($user){

        $total = 0;
        //查询freight总量
        $nilo_amount =  Freight::where([
                'user_id'=>$user['id'],
                'charge_type'=>0]
        )->sum('receivable_money');

        $country_list = Country::all();
        foreach ($country_list as $country){
            $store_list = Seller::where([
                    ['user_id','=',$user['id'] ],
                    ['type_id','=',$country->id]
                ]
            )->select('store_id')
                ->get();

            $store_ids = [];
            foreach ($store_list as $store){
                $store_ids[] = $store->store_id;
            }

            //查询box总量
            $prepare_amount =  PrepareBox::where([
                    ['to_id','=',$country->id],
                    ['is_send_to_nilo','=',0],
                    ['status','>=',10],
            ])->whereIn('store_id',$store_ids)->sum('freight');

            $spackage_amount =  SPackage::where([
                    ['platform','=','kilimall'],
                    ['pt_type','=',$country->id],
                    ['send_to_nilo_time','=',0],
                    ['p_status','>=',120],
            ])->whereIn('store_id',$store_ids)->sum('p_rfreight');

            $total = $total+$prepare_amount+$spackage_amount;
        }

        $rmb = Setting::find(1);
        $amount =  $nilo_amount+$total/$rmb['value'];
        return $amount;

    }

    /**
     * nilo+中转仓所有没发送到nilo的费用
     */
    public static function UserTotal($user){
        $total = 0;
        //查询freight总量
        $nilo_amount =  Freight::where([
                ['user_id','=',$user['id']],
        ])->whereIn('charge_type',[0,2])->sum('receivable_money');

        $country_list = Country::all();
        foreach ($country_list as $country){
            $store_list = Seller::where([
                    ['user_id','=',$user['id'] ],
                    ['type_id','=',$country->id]
                ]
            )->select('store_id')
                ->get();

            $store_ids = [];
            foreach ($store_list as $store){
                $store_ids[] = $store->store_id;
            }

            //查询box总量
            $prepare_amount =  PrepareBox::where([
                ['to_id','=',$country->id],
                ['is_send_to_nilo','=',0],

            ])->whereIn('store_id',$store_ids)->sum('freight');

            $spackage_amount =  SPackage::where([
                ['platform','=','kilimall'],
                ['pt_type','=',$country->id],
                ['send_to_nilo_time','=',0],
            ])->whereIn('store_id',$store_ids)->sum('p_rfreight');

            $total = $total+$prepare_amount+$spackage_amount;
        }

        $rmb = Setting::FindOrFail(1);
        $amount =  $nilo_amount+$total/$rmb['value'];
        return $amount;
    }

}
