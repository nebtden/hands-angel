<?php

/**
 * 个人可以发布文章
 */

namespace App\Http\Controllers\Seller;


use App\Models\Article;


use Encore\Admin\Form;
use Encore\Admin\Grid;
use App\Seller\Facades\Seller;
use App\Repositories\FreightRepository;
use App\Seller\Layout\Content;
use Encore\Admin\Controllers\HasResourceActions;

class ArticleController extends Controller
{

    use  HasResourceActions;

    //个人可以发布文章，管理文章。。对于文章，不显示
    public function index(Content $content){

        return $content->header('文章列表')->description('description')
            ->body($this->grid());
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


    /**
     * Make a grid builder.
     * @param $type 类型
     * @return Grid
     */
    protected function grid($type='')
    {

        $grid = new Grid(new Article());
        $grid->model()->where('type_id',$type);

        $grid->column('title')->display(function ($title) {
            return "<a href='".url('/user/task',[
                    'id'=>$this->id
                ])."'>$title</span></a>";
        });
        $grid->column('type_id','类型')->display(function ($type){
            return Article::$types[$type];
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
        $show = new Show(Article::findOrFail($id));

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

        $form = new Form(new Article());

        $form->text('title', '标题');
        $form->editor('content', '内容');
        $form->select('type_id', '类型')->options(Article::$user_types);

        return $form;


    }


}
