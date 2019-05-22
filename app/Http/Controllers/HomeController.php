<?php

namespace App\Http\Controllers;


use App\Models\AreaCountry;
use App\Models\Article;
use App\Models\Category;
use App\Models\Task;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function test(Request $request){
         return  $request->session()->get('invitation');
         return  session('invitation');
         return Auth::user();
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        //邀请码
        $invitation = $request->get('invitation');
        if($invitation){
            session(['invitation' => $invitation]);
        }


        //栏目
        $categories = Category::all();

        //文章列表1
        $first_articles = Article::where([
            'category_id'=>1,
            'status'=>1,
        ])->limit(2)->get();

        //任务列表
        $tasks = Task::where([
            'status'=>1,
        ])->orderBy('id', 'desc')->limit(6)->get();

        //video列表
        $videos = Video::where([
            'status'=>1,
        ])->orderBy('id', 'desc')->limit(6)->get();

        //用户列表
        $users = DB::table('user_messages')
            ->join('users', 'users.id', '=', 'user_messages.id')
            ->select('user_messages.*')
            ->where('users.status',1)
            ->orderBy('id', 'desc')
            ->limit(3)
            ->get() ;

        //文章列表
        $send_articles = Article::where([
            'category_id'=>2,
            'status'=>1,
        ])->limit(3)->get();

        $types = Task::$types;
        $countries = AreaCountry::all();

        return view('home',[
            'categories'=>$categories,
            'first_articles'=>$first_articles,
            'send_articles'=>$send_articles,
            'tasks'=>$tasks,
            'videos'=>$videos,
            'users'=>$users,
            'types'=>$types,
            'countries'=>$countries,
        ]);
    }


}
