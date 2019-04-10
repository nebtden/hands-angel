<?php

/**
 * 用于方法验证
 */

namespace App\Http\Controllers\User;



use App\Models\Images;
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

    public function destroy($id){
        $return = [];
        $return['status'] = 1;
        $user = Auth::user();
        try{

            $task = Task::find($id);
            if(!$task){
                throw  new \Exception('not found');
            }
            if($task->user_id !=$user->id){
                throw  new \Exception('error');
            }
            $task->delete();
        }catch (\Exception $exception){
            $return['msg'] = $exception->getMessage();
            $return['status'] = 0;
        }

        return response()->json($return);
    }

    public function store(Request $request){
        $task = new Task();
        $user = Auth::user();

        $task->images = $request->input('images');
        if($images = $request->input('images')){
            $images = explode(',',$images);
            $cover_id = $images[0];
            $task->cover = Images::find($cover_id)['src'];
        }

        $task->title = $request->input('title');
        $task->content = $request->input('content');
        $task->user_id = $user->id;
        $task->save();
        $id = $task->id;
        return redirect()->route("tasks/$id");
    }


}
