<?php

/**
 * 用于方法验证
 */

namespace App\Admin\Controllers;

use App\Models\CostRecord;
use App\Models\Freight;
use App\Models\Task;
use App\Models\UserMessage;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{


    public function index(Content $content){
        return $content->header('header')->description('description')
            ->body($this->grid());
    }



    /**
     * Show interface.
     *
     * @param mixed   $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }




    /**
     * Edit interface.
     *
     * @param mixed   $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }


    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {

        $grid = new Grid(new Task());

        $grid->column('name')->display(function ($name){
            return $name;
        });

        $grid->column('status')->display(function ($status){
            return Task::$status[$status];
        });

        $grid->filter(function ($filter) {

        });

        return $grid;
    }





    /**
     * Make a show builder.
     *
     * @param mixed   $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Task::findOrFail($id));

        $show->id('ID');
        $show->title('标题');
        $show->content('内容');

        return $show;
    }



    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {

        $form = new Form(new Task());

        $form->text('title', '标题');
        $form->textarea('content', '内容');
        $form->select('type_id', '类型')->options(Task::$types);

        $form->hidden('user_id');

        return $form;


    }

}
