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


class Controller extends BaseController{



    public function __construct(Request $request)
    {
        $this->middleware(['auth']);
    }


    /**
     * 获取当前用户能够管理的店铺
     * @param $grid Admin 的插件
     * @return object
     */
    public function getMyConditon($grid){
        $user = Auth::user();
        $grid->model()->where('user_id',$user->id);

        $grid->model()->orderBy('id', 'desc');
        return $grid;

    }

}
