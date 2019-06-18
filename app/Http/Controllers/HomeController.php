<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


        //配置信息
        $setting = Setting::where([
            'key'=>'home_text'
        ])->first();



        //video列表
        $videos = Video::where([
            'status'=>1,
        ])->orderBy('id', 'desc')->limit(6)->get();

        $users = User::where([
            'status'=>1,
        ])->orderBy('id', 'desc')->limit(15)->get();


        //用户列表
//        $users = DB::table('user_messages')
//            ->join('users', 'users.id', '=', 'user_messages.id')
//            ->select('user_messages.*')
//            ->where('users.status',1)
//            ->orderBy('id', 'desc')
//            ->limit(3)
//            ->get() ;

//        //文章列表
//        $send_articles = Article::where([
//            'category_id'=>2,
//            'status'=>1,
//        ])->limit(3)->get();

//        $types = Task::$types;
//        $countries = AreaCountry::all();

        return view('home',[
//            'categories'=>$categories,
//            'first_articles'=>$first_articles,
//            'send_articles'=>$send_articles,
//            'tasks'=>$tasks,
            'videos'=>$videos,
            'users'=>$users,
            'setting'=>$setting,
//            'types'=>$types,
//            'countries'=>$countries,
        ]);
    }


}
