<?php

/**
 * 其他人信息列表
 */

namespace App\Http\Controllers;





use Illuminate\Http\File;
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
        foreach($files as $key=>$input ){

            $extension =$input->getClientOriginalExtension();
            $name = $key.'-'.time().'.'.$extension;
            $input->storeAs(
                'images/task',$name, 'public'
            );
            $paths[] = 'images/task'.$name;
        }
        return   json_encode($paths);


    }



}
