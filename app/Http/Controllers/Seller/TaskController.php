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
use App\Repositories\FreightRepository;
use Encore\Admin\Widgets\Box;
use Encore\Admin\Widgets\Table;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class TaskController extends Controller
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
            $user = Auth::user();

            $form->text('title', '标题');
            $form->textarea('content', '标题');


            $form->select('type_id', '类型')->options(Task::$types);


            $form->saving(function(Form $form) {


                if (!Hash::check($_POST['old_password'], $form->model()->password)) {
                    throw  new \Exception(__('Old Password Error!'));
                }
                if($form->password){
                    $form->password = bcrypt($form->password);
                }
                $form->is_reset_password = 1;

            });

            $form->saved(function(){
                $request = App()->request;

                $request->session()->flush();

                $request->session()->regenerate();

                return redirect('/login');
            });

        });
    }

}
