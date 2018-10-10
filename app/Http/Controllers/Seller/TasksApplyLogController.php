<?php

/**
 * 用于支付端的方法验证
 */

namespace App\Http\Controllers\Seller;



use App\Models\TasksApplyLog;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use App\Seller\Facades\Seller;
use Encore\Admin\Facades\Admin;
use App\Seller\Layout\Content;
use Encore\Admin\Widgets\Box;
use Illuminate\Support\Facades\Auth;


class TasksApplyLogController extends Controller
{


    public function index(){

        return Seller::content(function (Content $content) {


            $content->body($this->grid());

        });
    }



    public function show($id){
        //
        return Seller::content( function (Content $content) use ($id) {

            $article = TasksApplyLog::findOrFail($id);
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
        return Seller::grid(Task::class, function (Grid $grid) use ($type){

            $grid->model()->where('type_id',$type);

            $grid->disableRowSelector();
            $grid->disableBatchDeletion();

            $grid->title()->value(function ($title) {
                return "<a href='".url('/user/task',[
                    'id'=>$this->id
                ])."'>$this->task</span></a>";
            });


            $grid->filter(function($filter) use ($type){

            });

        });
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
