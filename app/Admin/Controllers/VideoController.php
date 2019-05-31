<?php

/**
 * 用于方法验证
 */

namespace App\Admin\Controllers;



use App\Models\Images;
use App\Models\Task;
use App\Models\Video;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use  Encore\Admin\Controllers\HasResourceActions;

class VideoController extends Controller
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
            ->body($this->form()->edit($id));
    }




    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {

        $grid = new Grid(new Video());


        $grid->column('title')->display(function ($title) {
            return "<a target='_blank' href='".url('/videos',[
                    'id'=>$this->id
                ])."'>$title</span></a>";
        });
        $grid->column('img')->display(function ($value){
            return "<img src='$value'>";
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
        $show->img('内容');

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
        $form->input('video', '视频连接');
        $form->image('img', '视频封面');
//        $form->saving(function(Form $form) {
//
//        });
        return $form;


    }

}
