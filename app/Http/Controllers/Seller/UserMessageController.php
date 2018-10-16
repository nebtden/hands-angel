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
use Encore\Admin\Controllers\HasResourceActions;
use Exception;

class UserMessageController extends Controller
{
    use  HasResourceActions;

    public function index(Content $content){
        $user = Auth::user();
        return $content->header('个人信息')->description('个人信息补充')
             ->body('注意，经大家反馈，将个人信息补充完整，更有可能发布成功')
             ->body($this->form()->edit($user->id));
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
     * Make a show builder.
     *
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
     * Edit interface.
     *
     * @param mixed   $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        $user = Auth::user();
        if($user->id!=$id){
            throw new Exception('error');
        }

        return $content->
            header('个人信息')->description('个人信息补充')
                ->row(' 
<div class="box box-info"><div class="box-header with-border">
         注意，经大家反馈，将个人信息补充完整，更有可能发布成功</div>
</div>
')

            ->body($this->form()->edit($id));
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {

        $form = new Form(new UserMessage());
//        $form->setAction('/user/message');
        $form->select('sex', '性别')->options(UserMessage::$sex);
        $form->mobile('mobile', '手机号码');
//        $form->email('email', '邮件');
        $form->select('is_married', '是否结婚')->options(UserMessage::$married);
        $form->select('have_sex', '是否有性经验')->options(UserMessage::$hav_sex);

        //@todo  省份联动
        $form->year('birth_day', '出生年');
//        $form->('age', '年龄');
        $form->text('qq', 'QQ');
        $form->text('wechat', '微信');
        $form->saved(function (){
            return url('/');
        });

        return $form;


    }

}
