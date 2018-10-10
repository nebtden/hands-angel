<?php

/**
 * 用于支付端的方法验证
 */

namespace App\Http\Controllers\Seller;


use App\Models\Article;
use App\Models\CostRecord;
use App\Models\Freight;
use App\Models\Task;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use App\Seller\Facades\Seller;
use Encore\Admin\Facades\Admin;
use App\Seller\Layout\Content;
use Encore\Admin\Widgets\Box;
use Encore\Admin\Widgets\Table;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class TaskController extends Controller
{


    public function index(Content $content){
        return $content->header('header')->description('description')
            ->body($this->grid());

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
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Task());

        $grid->column('title')->display(function ($title) {
            return "<a href='".url('/user/task',[
                    'id'=>$this->id
                ])."'>$title</span></a>";
        });

        return $grid;
    }




    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {

        return Admin::form(Task::class, function (Form $form) {


            $form->text('title', '标题');
            $form->textarea('content', '内容');
            $form->select('type_id', '类型')->options(Task::$types);

            $form->saving(function(Form $form) {
                $user = Auth::user();
                $form->user_id = $user->id;
            });


        });
    }

}
