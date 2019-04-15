<?php

/**
 * 其他人信息列表
 */

namespace App\Http\Controllers;

use App\Models\AreaCountry;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index(Request $request){
        //用户列表
        $where = [];
        $sex = $request->get('sex');
        $country_id = $request->get('country_id');
        $name = $request->get('name');
        if($sex){
            $where[] = ['sex','=',$sex];
        }
        if($country_id){
            $where[] = ['country_id','=',$country_id];
        }
        if($name){
            $where[] = ['name','like','%'.$name.'%'];
        }

        $users =  User::where(
            $where
        )->paginate(7);
        $countries = AreaCountry::all();

        return view('users.index',[
            'users'=>$users,
            'countries'=>$countries,
        ]);
    }


    public function show($id){

    }




}
