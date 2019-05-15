<?php

namespace App\Http\Controllers;


use App\Models\AreaCountry;
use App\Models\AreaProvince;
use App\Models\Article;
use App\Models\Images;
use App\Models\Task;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class VideoController extends Controller
{

    /**
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //video  列表
        $video = Video::find($id);


        return view('video/detail',[
            'video'=>$video,
        ]);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $where = [];
        $tag_id = $request->get('tag_id');
        if($tag_id){
            $videos = DB::table('videos')
                ->join('videos_tags', 'videos.tag_id', '=', 'videos_tags.tag_id')
                ->select('videos.*')
                ->where('videos_tags.tag_id',$tag_id)
                ->orderBy('id', 'desc')
                ->paginate(10) ;
        }else{
            $videos =  Video::where(
              $where
            )->paginate(10);
        }

        return view('video/index',[
            'videos'=>$videos,
        ]);
    }

}
