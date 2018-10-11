<?php

namespace App\Http\Controllers;


use App\Models\Article;
use App\Models\Category;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //栏目
        $categories = Category::all();

        //文章列表1
        $first_articles = Article::where([
            'category_id'=>1,
            'status'=>1,
        ])->limit(3)->get();


        //文章列表2
        $send_articles = Article::where([
            'category_id'=>2,
            'status'=>1,
        ])->limit(3)->get();

        return view('welcome',[

            'categories'=>$categories,
            'first_articles'=>$first_articles,
            'send_articles'=>$send_articles,
        ]);
    }
}
