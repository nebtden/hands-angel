<?php

/**
 * 用于方法验证
 */

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use App\Models\AreaCountry;
use App\Models\Images;
use App\Models\Task;
use App\Models\UserRelation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        //用户列表
        $where = [];
        $user_id = Auth::user()->id;
        $where['user_id'] = $user_id;
        $tasks =  Task::where(
            $where
        )->paginate(7);

        $user = Auth::user();
        $types = Task::$types;

        return view('user.index',[
            'tasks'=>$tasks,
            'user'=>$user,
            'types'=>$types,
        ]);
    }




    public function profile(Request $request){
        if($request->post()){
            $user = Auth::user();
            $user->mobile = $request->input('mobile')??'';
            $user->wechat = $request->input('wechat')??'';
            $user->facebook = $request->input('facebook')??'';
            $user->twitter = $request->input('twitter')??'';
            $user->line = $request->input('line')??'';
            $user->qq = $request->input('qq')??'';
            if(!$user->sex){
                $user->sex = $request->input('sex');
            }

            //图片添加
            if($images = $request->input('images')){
                $user->images = $images;
            }


            $user->country_id = $request->input('country_id')??0;
            $user->save();

        }
        $user = Auth::user();
        $image_ids = $user->images;
        if($image_ids){
            $ids= explode(',',$image_ids);
            $images = Images::find($ids);
        }else{
            $images = [];
        }

        $countries = AreaCountry::all();
        return view('user.profile',[
            'user'=>$user,
            'countries'=>$countries,
            'images'=>$images,
        ]);
    }





    public function message(Request $request){
        $user = Auth::user();

        $relation = new UserRelation();
        $relation->apply_user_id = $user->id;
        $relation->applied_user_id = $request->input('user_id');
        $relation->message = $request->input('message');
        $relation->status = 0;
        $relation->save();

    }



}
