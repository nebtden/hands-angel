<?php

/**
 * 用户信息补充
 */

namespace App\Http\Controllers\Seller;

use App\Models\CostRecord;
use App\Models\Freight;
use App\Models\Task;
use App\Models\UserMessage;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use App\Seller\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Auth;


class UserMessageController extends Controller
{


    public function index(Content $content){
        $user = Auth::user();
        return $content->header('header')->description('description')
            ->body($this->form()->edit($user->id));
    }




    /**
     * Make a show builder.
     *
     * @param mixed   $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(UserMessage::findOrFail($id));


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
        $form->saving(function(Form $form) {
            $user = Auth::user();
            $form->user_id = $user->id;
        });
        return $form;


    }

}
