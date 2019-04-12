<?php

/**
 * 用于方法验证
 */

namespace App\Admin\Controllers;



use App\Models\Images;
use App\Models\Task;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use  Encore\Admin\Controllers\HasResourceActions;

class TaskController extends Controller
{
    use   HasResourceActions;

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
            ->body($this->detail($id))
            ->row($this->images_show($id));
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
            ->body($this->form()->edit($id))
            ->row($this->images_show($id));
    }


    public function images_show($id){
        $task = Task::find($id);
        $images = $task->images;
        $image_ids = explode(',',$images);
        $html = '';
        if($image_ids){

            $images = Images::find($image_ids);

            foreach($images as $image){
                $html.="<div class=\"container\"><img src='".$image['src']."''><br></div>";
            }
        }

        return $html;


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
            return "<a target='_blank' href='".url('/tasks',[
                    'id'=>$this->id
                ])."'>$title</span></a>";
        });
        $grid->column('status')->display(function ($status){
            return Task::$status[$status];
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



        $form->saving(function(Form $form) {

        });
        return $form;


    }

}
