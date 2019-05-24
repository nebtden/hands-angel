<?php

/**
 * 其他人信息列表
 */

namespace App\Http\Controllers;





use App\Models\Images;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class UploadController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function upload(Request $request){
        $files  = Input::all()['file'];
        $paths = [];
        $image = new Images();
        $user = Auth::user();
        foreach($files as $key=>$input ){
            $extension =$input->getClientOriginalExtension();
            $name = $key.'-'.time().rand(10000,99990).'.'.$extension;
            $input->storeAs(
                'images/user_images/',$name, 'public'
            );

            //存储到数据库
            $image->user_id = $user->id;
            $image->src = '/storage/images/user_images/'.$name;
            $image->save();
            $paths[] = $image->id;
        }
        return   implode(',',$paths);

    }


    public function head(Request $request){
        $input  = Input::all()['file'];
        $user = Auth::user();
        $extension =$input->getClientOriginalExtension();
        $name =  $user->id.'-'.time().'.'.$extension;
        $input->storeAs(
            'images/user',$name, 'public'
        );
        $user->head_img = $src = '/storage/images/user/'.$name;
        $user->save();

        return $src;

    }



}
