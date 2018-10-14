<?php

namespace App\Http\Controllers\Seller;


use App\User;
use Encore\Admin\Form;
use App\Seller\Facades\Seller;
use Encore\Admin\Facades\Admin;
use App\Seller\Layout\Content;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use  Encore\Admin\Controllers\HasResourceActions;

class SettingController extends Controller
{
    use  HasResourceActions;
    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Seller::content(function (Content $content) {

            $content->header('更改密码');
            $content->description(__('更改密码'));

            $user = Auth::user();
            $content->body($this->form()->edit($user->id));

        });
    }

    public function show($id){
        return Seller::content(function (Content $content) use ($id){

            $content->header('更改密码');
            $content->description(__('更改密码'));


        });
    }




    public function edit($id)
    {
        return Seller::content(function (Content $content) use ($id) {

            $content->header('更改密码');
            $content->description(__('更改密码'));

            $content->body($this->form()->edit($id));
        });
    }


    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {


        $form = new Form(new User());
        $user = Auth::user();

        //检测id是否为自己id  @todo
        $currentRoute = Route::current();//获取当前地址信息
        $params = $currentRoute->parameters();//获取参数

        $id = $params['setting'];
        if($id!=$user->id){
            return false;
        }

//        $form->display('name', __('Name'));
        $form->password('old_password','旧密码')->rules('required');;
        $form->password('password','新密码')->rules('required');

        $form->password('password_again','确认密码')->rules('required|same:password');;


        $form->ignore(['old_password','password_again']);


        $form->saving(function(Form $form) {


            if (!Hash::check($_POST['old_password'], $form->model()->password)) {
                throw  new \Exception(__('Old Password Error!'));
            }
            if($form->password){
                $form->password = bcrypt($form->password);
            }


        });

        $form->saved(function(){
            $request = App()->request;

            $request->session()->flush();

            $request->session()->regenerate();


        });


        return $form;
    }
}
