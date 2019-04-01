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
            $name = $key.'-'.time().'.'.$extension;
            $input->storeAs(
                'images/task',$name, 'public'
            );
            $paths[] = '/images/task'.$name;

            //存储到数据库
            $image->user_id = $user->id;
            $image->src = '/images/task'.$name;
            $image->save();
        }
        return   implode(',',$paths);


    }



}
