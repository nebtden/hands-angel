<?php

namespace App\Http\Controllers\Seller;


use App\Models\Deduction;
use App\Models\Freight;
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
    public function index()
    {
        return Seller::content(function (Content $content) {

            $user = Auth::user();
            $content->header('Dashboard');
            $content->description('Welcome to nilo...');

            if($user->account_type==1){
                //环球等第三方快递
                $this->ClinentRow($content);
            }else{
                $this->SellerRow($content);
            }

            //收件人的信息

        });
    }


    public function ClinentRow($content){
        $content->row('欢迎使用nilo物流系统！');
    }

    public function SellerRow($content){
        $data1 = "总计充值金额=已审核充值金额+优惠卷+平台代扣金额".'<br>';
        $data2 = '已消费金额=GS发货金额（中转仓已收货）+FBK备货金额（中转仓已收货）'.'<br>';
        $data3 = '可用金额=审核金额-消费金额 (可用金额为负数，代表欠费金额数)'.'<br>';
//            $data4 = '欠费金额=可用余额小于0时,显示可用余额的绝对值,否则显示0'.'<br>';
        $data  = $data1.$data2.$data3;

        $content->row((new Box('计算公式',$data))->style('info')->solid());


        $content->row(function ($row) {
            $user = Auth::user();
            $user_id = $user->id;

            $passed_amount= Transaction::where([
                'user_id'=>$user_id,
                'status'=>1
            ])->sum('usd');


            $amount = User::UserTotal($user);

            $total = $passed_amount-$amount;
            $total = number_format($total,2);
            $amount = number_format($amount,2);

            $row->column(3, new InfoBox(__('Available Balance'), 'money', 'aqua', '#', '$'.$total));

            $row->column(3, new InfoBox(__('Consumption Amount'), 'money', 'green', '#', '$'.($amount?:0)));
            $row->column(3, new InfoBox(__('Approved Amount'), 'money', 'yellow', '#', '$'.$passed_amount));
        });
    }
}
