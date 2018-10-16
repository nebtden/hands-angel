<?php
/**
 * Created by PhpStorm.
 * User: zhanqian
 * Date: 2018/10/16
 * Time: 23:09
 */


namespace App\Http\Controllers;


use App\Models\Article;
use App\Models\Category;
use App\Models\Task;
use App\Models\AreaCity;
use App\Models\AreaProvince;
use App\Models\UserMessage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ApiController extends Controller
{


    public function city(Request $request)
    {
        $provinceId = $request->get('q');

        return AreaCity::where('province_id', $provinceId)->get(['id', DB::raw('name as text')]);
    }

}
