<?php

/**
 * 其他人信息列表
 */

namespace App\Http\Controllers;

use App\Models\AreaCountry;
use App\Models\Images;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

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
        )->where('status','>=',0)->paginate(20);
        $countries = AreaCountry::all();

        return view('users.index',[
            'users'=>$users,
            'countries'=>$countries,
        ]);
    }


    public function show($id){

        $user   = User::find($id);
        if(!$user){
            return false;
        }
        $status = User::$status;
        $types = $user->types;
        if($types){
            $types= explode(',',$types);
        }else{
            $types = [];
        }

        $image_ids = $user->images;
        if($image_ids){
            $ids= explode(',',$image_ids);
            $images = Images::find($ids);
        }else{
            $images = [];
        }


        //recent 列表
        $recent = User::where([])->orderBy('created_at','desc')->take(6)->get();


        return view('users/detail',[
            'user'=>$user,
            'recent'=>$recent,
            'images'=>$images,
            'types'=>$types,
            'status'=>$status,

        ]);
    }




}
