<?php

/**
 * 其他人信息列表
 */

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\UserMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

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


    public function show($id){
        $user = UserMessage::find($id);


        return view('user.show',[
            'user'=>$user,
        ]);
    }


    public function profile(Request $request){
        if($request->post()){
            $user_id = Auth::user()->id;
            $name = $request->input('name');
            $mobile = $request->input('mobile');
            $name = $request->input('name');
            $name = $request->input('name');
        }
        $user = Auth::user();
        return view('user.profile',[
            'user'=>$user,
        ]);
    }

    //更新交易信息
    public function update_profile(Request $request){

    }

    public function upload(Request $request){
        $user_id = Auth::user()->id;
        $path = $request->file('file')->storeAs(
            'images/users',$user_id.'.'.$request->file('file')->extension(), 'public'
        );

        $user = Auth::user();
        $user->head_img = '/storage/'. $path;
        $user->update();

        return $path;
    }

    public function tasks(){
        $user = Auth::user();
        return view('user.task-list',[
            'user'=>$user,
        ]);
    }

    public function task(Request $request){


        $user = Auth::user();
        return view('user.add-task',[
            'user'=>$user,
        ]);
    }








}
