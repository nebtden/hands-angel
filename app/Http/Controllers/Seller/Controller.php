<?php
/**
 * Created by PhpStorm.
 * User: zhanqian
 * Date: 2017/6/12
 * Time: 14:07
 */
namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Seller;
use App\Models\Client;

class Controller extends BaseController{

    public function __construct(Request $request)
    {
        $this->middleware(['auth','local']);
    }

    public function getSellerIds(){
        $user = Auth::user();
        $store_ids = Seller::where([
            'user_id'=>$user->id
        ])->pluck('store_id')->toArray();
        return $store_ids;
    }

    /**
     * 获取当前用户能够管理的店铺
     * @param $grid Admin 的插件
     * @return object
     */
    public function getMyConditon($grid){
        $user = Auth::user();
        if($user->account_type==0){
            $grid->model()->where('user_id',$user->id);
        }else{
            $client = Client::where(['user_id'=>$user->id])->first();
            $grid->model()->where('client_id',$client->id);
        }

//        $store_ids = $this->getSellerIds();
//        if($store_ids){
//            $grid->model()->whereIn('store_id', $store_ids);
//        }else{
//            throw new \Exception('you don\'t have any stores,please contact the administor!');
//        }
        $grid->model()->orderBy('id', 'desc');
        return $grid;

    }

}