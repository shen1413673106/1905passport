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


////管理员模块
//Route::prefix('api/')->middleware('CheckLogin')->group(function(){
//    Route::post('/user/reg','User\UserController@reg');     //注册
//    Route::post('/user/login','User\UserController@login'); // 登录
//    Route::get('/show/time','User\UserController@showTime'); // 获取数据
//    Route::post('/auth','User\UserController@auth'); // 鉴权
//});
Route::post('/api/user/reg','User\UserController@reg');     //注册
Route::post('/api/user/login','User\UserController@login'); // 登录
Route::get('/api/show/time','User\UserController@showTime'); // 获取数据
Route::post('/api/auth','User\UserController@auth');
//登录
Route::post('/test/reg','TestController@reg');
Route::post('/test/login','TestController@login');
Route::get('/test/info','TestController@info');

Route::post('/test/auth','TestController@auth');


//签名验证
Route::get('/test/checksign','TestController@md5test');



