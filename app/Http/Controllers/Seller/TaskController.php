<?php

/**
 * 用于方法验证
 */

namespace App\Http\Controllers\Seller;

use App\Models\CostRecord;
use App\Models\Freight;
use App\Models\Task;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use App\Seller\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Auth;
use Encore\Admin\Controllers\HasResourceActions;

class TaskController extends Controller
{
    use  HasResourceActions;

    public function index(Content $content){
        return $content->header('自身需求')->description('description')
            ->body($this->grid());
    }


    public function others(Content $content){
        return $content->header('其他需求')->description('description')
            ->body($this->other_grid());
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
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $user = Auth::user();
        $grid = new Grid(new Task());
        $grid->model()->where('user_id',$user->id);

        $grid->column('title')->display(function ($title) {
            return "<a href='".url('/user/task',[
                    'id'=>$this->id
                ])."'>$title</span></a>";
        });
        $grid->type_id('类型')->display(function ($type) {
            return Task::$types[$type];
        });

        return $grid;
    }


    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function other_grid()
    {

        $grid = new Grid(new Task());


        $grid->column('title')->display(function ($title) {
            return "<a href='".url('/user/task',[
                    'id'=>$this->id
                ])."'>$title</span></a>";
        });
        $grid->type_id('类型')->display(function ($type) {
            return Task::$types[$type];
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
        $form->setAction('admin/users');
        $form->text('title', '标题');
        $form->textarea('content', '内容');
        $form->select('type_id', '类型')->options(Task::$types);
        $form->hidden('user_id');
        $form->saving(function(Form $form) {
            $user = Auth::user();
            $form->user_id = $user->id;
        });
        return $form;


    }


}
