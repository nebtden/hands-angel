<?php

/**
 * 用于支付端的方法验证
 */

namespace App\Http\Controllers\Seller;


use App\Models\Article;
use App\Models\CostRecord;
use App\Models\Freight;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use App\Seller\Facades\Seller;
use Encore\Admin\Facades\Admin;
use App\Seller\Layout\Content;
use App\Repositories\FreightRepository;
use Encore\Admin\Widgets\Box;
use Encore\Admin\Widgets\Table;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class ArticleController extends Controller
{


    public function index(){

        return Seller::content(function (Content $content) {
            $content->body($this->grid());
        });
    }



    public function show($id){
        //
        return Seller::content( function (Content $content) use ($id) {

            $article = Article::findOrFail($id);
            $box = new Box($article->title, $article->content);
            $content->row($box);

        });
    }


    /**
     * Make a grid builder.
     * @param $type 类型
     * @return Grid
     */
    protected function grid($type='')
    {
        return Seller::grid(Article::class, function (Grid $grid) use ($type){

            $grid->model()->where('type_id',$type);
            $grid->disableExport();
            $grid->disableCreateButton();
            $grid->disableRowSelector();
            $grid->disableBatchDeletion();
            $grid->disableActions();

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
