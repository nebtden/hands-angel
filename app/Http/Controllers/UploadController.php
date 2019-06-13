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
use Intervention\Image\Facades\Image;

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

        $user = Auth::user();
        foreach($files as $key=>$input ){
            $image = new Images();
            $extension =$input->getClientOriginalExtension();
            $name = $key.'-'.time().rand(10000,99990).'.'.$extension;
//            $input->storeAs(
//                'images/user_images/',$name, 'public'
//            );
            $src = 'images/user_images/'.$name;
            $image_object = Image::make($input);
            $image_object ->resize(500, null,function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save( storage_path('app/public/'.$src));

            //存储到数据库
            $image->user_id = $user->id;
            $image->src = '/storage/'.$src;
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
        $src = 'images/user/'.$name;
        $image = Image::make(Input::file('file'));
        $image ->resize(500, null,function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->save( storage_path('app/public/'.$src));
        $user->head_img = '/storage/'.$src;
        $user->save();

        return '/storage/'.$src;

    }



}
