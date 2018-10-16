<?php

/**
 * 用于支付端的方法验证
 */

namespace App\Http\Controllers\User;


use App\Models\Article;
use App\Models\CostRecord;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use App\User\Facades\User;
use Encore\Admin\Facades\Admin;
use App\User\Layout\Content;
use App\Repositories\FreightRepository;
use Encore\Admin\Widgets\Box;
use Encore\Admin\Widgets\Table;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class ArticleController extends Controller
{


    public function index(){

        return User::content(function (Content $content) {

            $content->header(__('Article'));
            $content->description(__('Article'));

            $content->body($this->grid());

        });
    }

    public function faq(){

        return User::content(function (Content $content) {

            $content->header(__('FAQ'));
            $content->description(__('FAQ'));

            $content->body($this->grid(1));

        });
    }

    public function show($id){
        //
        return User::content( function (Content $content) use ($id) {

            $article = Article::findOrFail($id);
            $box = new Box($article->title, $article->content);
            $content->row($box);
//            echo $box;
//            //运单的发货人信息
//            $headers = ['Keys', 'Values'];
//            $rows = ['SenderName2'=> '','SenderName1'=> '',
//            ];
//            $table = new Table($headers, $rows);
//            $content->row((new Box('SenderInfo', $table))->style('info')->solid());


        });
    }


    /**
     * Make a grid builder.
     * @param $type 类型
     * @return Grid
     */
    protected function grid($type='')
    {
        return User::grid(Article::class, function (Grid $grid) use ($type){

            $grid->model()->where('type_id',$type);
            $grid->disableExport();
            $grid->disableCreation();
            $grid->disableRowSelector();
            $grid->disableBatchDeletion();
            $grid->disableActions();

//            $grid->display('id', 'ID');
//            $grid->title(__('Title'));
            $grid->title()->value(function ($title) {
                return "<a href='".url('/seller/article',[
                    'id'=>$this->id
                ])."'>$this->title</span></a>";
            });


            $grid->filter(function($filter) use ($type){

            });

        });
    }


}
