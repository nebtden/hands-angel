<?php

namespace App\Http\Controllers;


use App\Models\Article;


class ArticleController extends Controller
{

    /**
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //文章列表1
        $article = Article::find($id);

        return view('article',[
            'article'=>$article,
        ]);
    }

}
