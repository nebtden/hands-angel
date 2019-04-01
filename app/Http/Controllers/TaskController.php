<?php

namespace App\Http\Controllers;


use App\Models\AreaProvince;
use App\Models\Article;
use App\Models\Task;
use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{

    /**
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //文章列表1
        $task = Task::find($id);

        return view('task/detail',[
            'task'=>$task,
        ]);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //显示列表页
        $types = Task::$types;
        $provinces = AreaProvince::all();
        $list =  DB::table('tasks')->paginate(10);

        return view('task/list',[
            'list'=>$list,
            'types'=>$types,
            'provinces'=>$provinces,
        ]);
    }

}
