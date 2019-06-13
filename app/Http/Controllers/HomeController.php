<?php

namespace App\Http\Controllers;

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


        //video列表
        $videos = Video::where([
            'status'=>1,
        ])->orderBy('id', 'desc')->limit(6)->get();

        $users = User::where([
            'status'=>1,
            'is_recommend'=>1,
        ])->orderBy('id', 'desc')->limit(15)->get();



        return view('home',[
            'videos'=>$videos,
            'users'=>$users,
        ]);
    }


}
