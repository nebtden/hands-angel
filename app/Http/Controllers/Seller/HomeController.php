<?php

namespace App\Http\Controllers\Seller;


use App\Models\Deduction;

use App\Models\User;
use App\Models\Transaction;
use App\Seller\Facades\Seller;
use App\Seller\Layout\Content;
use Encore\Admin\Widgets\InfoBox;
use Encore\Admin\Widgets\Box;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Content $content)
    {
        return $content->header('Dashboard')->description('Welcome to nilo...')
            ->row('欢迎来到天使之城！');


    }


}
