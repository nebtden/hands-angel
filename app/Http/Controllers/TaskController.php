<?php

namespace App\Http\Controllers;


use App\Models\AreaCountry;
use App\Models\AreaProvince;
use App\Models\Article;
use App\Models\Images;
use App\Models\Task;
use Illuminate\Http\Request;
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
    public function index(Request $request)
    {
        $where = [];
        $type_id = $request->get('type_id');
        $country_id = $request->get('country_id');
        $title = $request->get('title');
        if($type_id){
            $where[] = ['type_id','=',$type_id];
        }
        if($country_id){
            $where[] = ['country_id','=',$country_id];
        }
        if($title){
            $where[] = ['title','like','%'.$title.'%'];
        }

        //显示列表页
        $types = Task::$types;
//        $provinces = AreaProvince::all();
        $tasks =  Task::where(
            $where
        )->paginate(5);

        $total = DB::table('tasks')->count();

        $countries = AreaCountry::all();


        return view('task/index',[
            'tasks'=>$tasks,
            'types'=>$types,
            'countries'=>$countries,
            'total'=>$total,
//            'provinces'=>$provinces,
        ]);
    }

}
