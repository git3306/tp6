<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;


//http://127.0.0.1:8000/admin/events

Route::get('index', 'admin.Events/index');//admin应用/Events控制器/index方法   # “/index” 也可以写成“@index”
Route::get('index2', 'admin.Events/index2');//admin应用/Events控制器/index方法   # “/index” 也可以写成“@index”
Route::get('index3', 'admin.Events/index3');//admin应用/Events控制器/index方法   # “/index” 也可以写成“@index”




//http://127.0.0.1:8000/admin/log
Route::get('log', 'admin/Index/log');//admin应用/Index控制器/log方法


