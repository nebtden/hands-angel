<?php

/**
 * 用户信息补充
 */

namespace App\Http\Controllers\Seller;

use App\Models\CostRecord;
use App\Models\Freight;
use App\Models\UserMessage;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use App\Seller\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{


    public function index(Content $content){

        return $content->header('header')->description('description')
            ->body($this->grid());
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
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $user = Auth::user();
        $grid = new Grid(new UserMessage());
        $grid->model()->where('user_id',$user->id);

        $grid->column('title')->display(function ($title) {
            return "<a href='".url('/user/task',[
                    'id'=>$this->id
                ])."'>$title</span></a>";
        });
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();

            $filter->equal('sex')->select(UserMessage::$sex);
            $filter->equal('have_sex')->select(UserMessage::$hav_sex);
            $filter->between('age', '年龄');
        });

        return $grid;
    }


    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {

        $form = new Form(new UserMessage());

        $form->display('sex', '性别')->options(UserMessage::$sex);
        $form->display('mobile', '手机号码');
//        $form->email('email', '邮件');
        $form->display('is_married', '是否结婚')->options(UserMessage::$married);
        $form->display('have_sex', '是否有性经验')->options(UserMessage::$hav_sex);
        $form->date('birth_day', '出生日期');
        $form->display('qq', 'QQ');
        $form->display('wechat', '微信');


        return $form;


    }

}