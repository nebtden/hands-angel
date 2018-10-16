<?php

/**
 * 用于方法验证
 */

namespace App\Admin\Controllers;



use App\Models\Task;
use App\Models\User;
use App\Models\UserMessage;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Auth;
use  Encore\Admin\Controllers\HasResourceActions;

class UserController extends Controller
{

    use  HasResourceActions;

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

        $grid = new Grid(new User());

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
        $show = new Show(User::findOrFail($id));

        $show->id('ID');
        $show->name('用户名');
        $show->status('内容');

        return $show;
    }



    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {

        $form = new Form(new User());

        $form->display('name', '用户名');

        $form->select('status', '类型')->options(User::$status);

        return $form;


    }

}
