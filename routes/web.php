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

Route::get('/test', 'HomeController@test');
Route::get('/simon', 'HomeController@simon');
Route::post('/mail', 'MailController@subscribe');

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');



//任务列表页
Route::resource('user/tasks', 'User\TaskController');
Route::get('/tasks', 'TaskController@index');
Route::get('/tasks/{id}', 'TaskController@show');

//用户列表页
Route::get('/users', 'UserController@index');
Route::get('/users/{id}', 'UserController@show');

//视频列表页
Route::get('/videos', 'VideoController@index');
Route::get('/video/{id}', 'VideoController@show');

//用户自身相关列表
Route::get('/user/profile', 'User\UserController@profile');
Route::post('/user/profile', 'User\UserController@profile');
Route::post('/user/message', 'User\UserController@message');
Route::get('/user/index', 'User\UserController@index');

//上传图像必须本人
Route::any('/upload', 'UploadController@upload');
Route::any('/upload/head', 'UploadController@head');



//   最近有很多女生反应，受骚扰情况较多，因此，只展示部分资料,微信、QQ等一律屏蔽。，  2016-08-04
//   也对网站的逻辑进行了更新，现在男生女生都需要像对方发送邀请，对方同意之后，才可以交换资料。

//   希望大家都做一个文明人，不要爆粗口。文明交友，文明撩骚，文明聊骚。。

//  4 现网站支持大家分享，大家可以分享自己的用户id。对于分享成功次数较多（以成功注册且通过审核为准）的用户，可以升级为管理员（可以对用户进行审核）。

//  5 我们开通了FAQ，可以像我们提建议。。

//  6  大家可以发布管理文章，提供最高测试。。

//  7 可以考虑使用paypay等方式进行开通，尽量使用第三方语言，多个翻译。。


//Route::resource('/users', 'UserController');


//查看最近几个用户
//Route::middleware(['pjax'])->resource('/user/users', 'Seller\UserController');
//  ----------------------------------------------------------------------
//  设计逻辑：task 发布需求，article 显示列表



// 设置密码等操作
Route::middleware('pjax')->resource('/user/setting', 'Seller\SettingController',['as'=>'/user/setting']);
//Route::put('/user/setting/update', 'Seller\SettingController@update');


Route::get('logout', 'Auth\LoginController@logout')->name('logout');
