<?php

/**
 * 用于方法验证
 */

namespace App\Http\Controllers\User;



use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create(Request $request){
        $user = Auth::user();
        $types = Task::$types;


        return view('user.add-task',[
            'user'=>$user,
            'types'=>$types,
        ]);
    }

    public function store(Request $request){
        $task = new Task();
        $user = Auth::user();

        $task->images = $request->input('images');
        $task->title = $request->input('title');
        $task->content = $request->input('content');
        $task->user_id = $user->id;
        $task->save();
        $id = $task->id;
        return redirect()->route("tasks/$id");
    }


}
