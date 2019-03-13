<?php

/**
 * 用于方法验证
 */

namespace App\Admin\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\User;
use App\Models\UserMessage;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Auth;
use  Encore\Admin\Controllers\HasResourceActions;

class UserMessageController extends Controller
{

    use  HasResourceActions;

    public function index(Content $content){
        return $content->header('用户信息')->description('用户信息')
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
            ->header('用户信息')
            ->description('用户信息')
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
            ->header('编辑')
            ->description('用户信息')
            ->body($this->form()->edit($id));
    }


    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {

        $grid = new Grid(new UserMessage());

        $grid->qq('QQ');
        $grid->wechat('微信');
        $grid->mobile('手机号码');
        $grid->column('sex','性别')->display(function ($sex) {
            return UserMessage::$sex[$sex];
        });
        $grid->column('have_sex','是否有性经验')->display(function ($hav_sex) {
            return UserMessage::$hav_sex[$hav_sex];
        });
        $grid->email('邮件');
        $grid->birth_day('出生年');
        $grid->status('状态')->display(function ($status) {
            return User::$status[$status];
        });
//       $grid->age('年龄(年龄可能邮件)')->;



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
        $show = new Show(UserMessage::findOrFail($id));

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

        $form = new Form(new UserMessage());

        $form->display('real_name', '姓名');
 ;
        $form->display('qq', 'QQ');
        $form->display('mobile', '手机号码');
        $form->display('is_married', '是否结婚')->options(UserMessage::$married);
        $form->display('wechat', '微信');
        return $form;


    }

}
