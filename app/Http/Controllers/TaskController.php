<?php

namespace App\Http\Controllers;


use App\Models\AreaProvince;
use App\Models\Article;
use App\Models\Images;
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
        $image_ids = $task->images;
        if($image_ids){
            $ids= explode(',',$image_ids);
            $images = Images::find($ids);
        }

        //recent 列表
        $recent = Task::where([])->orderBy('created_at','desc')->take(6)->get();
        $types = Task::$types;

        return view('task/detail',[
            'task'=>$task,
            'images'=>$images,
            'recent'=>$recent,
            'types'=>$types,
        ]);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $page =
        //显示列表页
        $types = Task::$types;
        $provinces = AreaProvince::all();
        $list =  DB::table('tasks')->paginate(10);

        return view('task/index',[
            'list'=>$list,
            'types'=>$types,
            'provinces'=>$provinces,
        ]);
    }

}
