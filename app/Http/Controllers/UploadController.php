<?php

/**
 * 其他人信息列表
 */

namespace App\Http\Controllers;





use Illuminate\Http\File;
use Illuminate\Support\Facades\Input;
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
        $input = Input::all();
        $rules = array(
            'file' => 'image|max:3000',
        );

        $validation =  Validator::make($input, $rules);

        if ($validation->fails())
        {
            return  Response::make($validation->errors->first(), 400);
        }

        $file = Input::file('file');

        $extension =$file->extention();
        $directory = path('public').'uploads/'.sha1(time());
        $filename = sha1(time().time()).".{$extension}";

        $upload_success = Input::upload('file', $directory, $filename);

        $success_message = array( 'success' => 200,
            'filename' => $filename,
        );

        if( $upload_success ) {
            return Response::json($success_message);
        } else {
            return Response::json('error', 400);
        }
    }



}
