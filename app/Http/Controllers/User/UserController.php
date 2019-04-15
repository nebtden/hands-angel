<?php

/**
 * 用于方法验证
 */

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use App\Models\AreaCountry;
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




    public function profile(Request $request){
        if($request->post()){
            $user = Auth::user();
            $user->name = $request->input('name');
            $user->mobile = $request->input('mobile')??'';
            $user->wechat = $request->input('wechat');
            $user->facebook = $request->input('facebook');
            $user->twitter = $request->input('twitter');
            $user->line = $request->input('line');
            $user->sex = $request->input('sex');
            $user->country_id = $request->input('country_id')??0;
            $user->save();

        }
        $user = Auth::user();
        $countries = AreaCountry::all();
        return view('user.profile',[
            'user'=>$user,
            'countries'=>$countries,
        ]);
    }


    public function tasks(){
        $user = Auth::user();
        return view('user.task-list',[
            'user'=>$user,
        ]);
    }

    public function store(Request $request){
        $user = Auth::user();

        $task = new Task();
        $task->country_id = $user->country_id;
        $task->sex        = $user->sex;
        $task->type_id = $request->input('type_id');
        $task->title   = $request->input('title');
        $task->content = $request->input('content');
        $task->images  = $request->input('images');
        $task->save();

    }



}
