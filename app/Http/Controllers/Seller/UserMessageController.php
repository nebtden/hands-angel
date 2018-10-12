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
        return $content->header('个人信息')->description('个人信息补充')
             ->body('注意，经用户反馈，个人信息补充完整，更有可能发布成功')
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

        $form->select('sex', '性别')->options(UserMessage::$sex);
        $form->mobile('mobile', '手机号码');
//        $form->email('email', '邮件');
        $form->select('is_married', '是否结婚')->options(UserMessage::$married);
        $form->select('have_sex', '是否有性经验')->options(UserMessage::$hav_sex);
        $form->date('birth_day', '出生日期');
        $form->text('qq', 'QQ');
        $form->text('wechat', '微信');


        return $form;


    }

}
