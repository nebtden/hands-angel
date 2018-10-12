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


class SettingController extends Controller
{
    //use ModelForm;
//    use ResetsPasswords;
    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Seller::content(function (Content $content) {

            $content->header(__('Change Password'));
            $content->description(__('Change Password'));

            $user = Auth::user();
            $content->body($this->form()->edit($user->id));

        });
    }

    public function show($id){
        return Seller::content(function (Content $content) use ($id){

            $content->header(__('Change Password'));
            $content->description(__('Change Password'));


        });
    }


    public function update($id)
    {
        return $this->form()->update($id);
    }

    /*    public function update(Request $request){

            $password  = $request->input('password');
            if($password){
                $user = Auth::user();
                //@simon.zhang  需要验证位数等。。进行加密
                $user->password = bcrypt($password);
                $user->update();
            }

            return redirect('/seller/setting');

        }*/


    public function edit($id)
    {
        return Seller::content(function (Content $content) use ($id) {

            $content->header(__('Change Password'));
            $content->description(__('Change Password'));

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

        $form->display('id', 'ID');
        $form->display('created_at', 'Created At');
        $form->saving(function(Form $form) {
            $user = Auth::user();
            $form->password = Hash::make($form->password);
        });

        return $form;
    }
}
