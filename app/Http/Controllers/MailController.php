<?php

/**
 * 其他人信息列表
 */

namespace App\Http\Controllers;

use App\Models\Images;
use App\Models\Email;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;;
use Illuminate\Http\Request;

class MailController extends Controller
{



    public function subscribe(Request $request){
        $return = [];
        $return['status']=1;

        $validatedData = $request->validate([
            'email' => 'required|email',
        ]);

        $email = $request->get('email');

        //add to the database
        $mail = new Email();
        $mail->email = $email;
        $result = $mail->save();
        if($result){
            return response()->json($return);
        }else{
            return response()->json($return);
        }



    }



}
