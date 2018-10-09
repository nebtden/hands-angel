<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//卖家登陆路由
Auth::routes();

//普通页面
Route::get('/home', 'Seller\HomeController@index');

Route::middleware(['pjax'])->resource('/user/transaction', 'Seller\TransactionController');

Route::middleware(['pjax'])->resource('/user/transition', 'Seller\TransitionController');

Route::middleware(['pjax'])->resource('/user/article', 'Seller\ArticleController');


Route::middleware(['pjax'])->get('/user/faq', 'Seller\ArticleController@faq');



// 设置密码等操作
Route::middleware('pjax')->resource('/user/setting', 'Seller\SettingController',['as'=>'/user/setting']);
//Route::put('/user/setting/update', 'Seller\SettingController@update');


Route::get('logout', 'Auth\LoginController@logout')->name('logout');