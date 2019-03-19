<?php

/**
 * 其他人信息列表
 */

namespace App\Http\Controllers;

use App\Models\UserMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{


    public function index(){
        //用户列表


        $users = DB::table('user_messages')
            ->join('users', 'users.id', '=', 'user_messages.id')
            ->select('user_messages.*')
            ->where('users.status',1)
            ->orderBy('id', 'desc')
            ->limit(15)
            ->get() ;


        return view('user.index',[
            'users'=>$users,
        ]);
    }


    public function show($id){
        $user = UserMessage::find($id);


        return view('user.show',[
            'user'=>$user,
        ]);
    }


    public function profile(){

        return view('user.profile',[
            'user'=>[],
        ]);
    }

    //更新交易信息
    public function update_profile(Request $request){
        $user_id = Auth::user()->id;
        $name = $request->input('name');
        $mobile = $request->input('mobile');
        $name = $request->input('name');
        $name = $request->input('name');
    }

    public function upload(Request $request){

        $path = $request->file('file')->store('avatars');

        return $path;
    }

}
