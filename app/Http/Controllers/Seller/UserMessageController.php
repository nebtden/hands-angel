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

        $form = new Form(new UserMessage());

//        $form->text('real_name', '真实姓名');
        $form->select('sex', '性别')->options(UserMessage::$sex);
        $form->mobile('mobile', '手机号码');
        $form->email('email', '邮件');
        $form->select('is_married', '是否结婚')->options(UserMessage::$married);
        $form->select('have_sex', '是否有性经验')->options(UserMessage::$hav_sex);
        $form->date('birth_day', '出生日期');
        $form->text('qq', 'QQ');
        $form->text('wechat', '微信');

        $form->hidden('user_id');
        $form->saving(function(Form $form) {
            $user = Auth::user();
            $form->user_id = $user->id;
        });
        return $form;


    }

}
