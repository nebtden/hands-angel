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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/list', 'HomeController@list')->name('list');
//Route::get('/articles', 'Seller\ArticleController');
//卖家登陆路由
Auth::routes();

//普通页面
Route::get('/home', 'Seller\HomeController@index');
Route::get('/article/{id}', 'ArticleController@show');

Route::middleware(['pjax'])->resource('/user/tasks', 'Seller\TaskController');
Route::middleware(['pjax'])->resource('/user/articles', 'Seller\ArticleController');

Route::middleware(['pjax'])->resource('/user/apply_log', 'Seller\TasksApplyLogController');

Route::middleware(['pjax'])->resource('/user/articles', 'Seller\ArticleController');
Route::middleware(['pjax'])->resource('/user/message', 'Seller\UserMessageController');




// 设置密码等操作
Route::middleware('pjax')->resource('/user/setting', 'Seller\SettingController',['as'=>'/user/setting']);
//Route::put('/user/setting/update', 'Seller\SettingController@update');


Route::get('logout', 'Auth\LoginController@logout')->name('logout');
