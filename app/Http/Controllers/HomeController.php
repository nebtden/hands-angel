<?php

namespace App\Http\Controllers;


use App\Models\Article;
use App\Models\Category;
use App\Models\Task;
use App\Models\AreaProvince;
use App\Models\UserMessage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function test(){
         return Auth::user();
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $id = Auth::user();
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
        ])->orderBy('id', 'desc')->limit(3)->get();

        //用户列表

        $users = DB::table('user_messages')
            ->join('users', 'users.id', '=', 'user_messages.id')
            ->select('user_messages.*')
            ->where('users.status',1)
            ->orderBy('id', 'desc')
            ->limit(3)
            ->get() ;

        //文章列表2
        $send_articles = Article::where([
            'category_id'=>2,
            'status'=>1,
        ])->limit(3)->get();

        return view('home',[

            'categories'=>$categories,
            'first_articles'=>$first_articles,
            'send_articles'=>$send_articles,
            'tasks'=>$tasks,
            'users'=>$users,
        ]);
    }

    public function vpn(){
        $article =         $send_articles = Article::where([
            'category_id'=>2,
            'status'=>1,
        ])->limit(3)->get();
        return view('article',[

            'article'=>$article,

        ]);

    }

    public function userList(){

        return view('user-list',[

            'article'=>[],

        ]);

    }
}
