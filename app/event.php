<?php
// 事件定义文件
use think\facade\Event;
use think\Log;


return [
    //批量绑定事件
    'bind'      => [
        'RegisterEvent'=>'\app\event\RegisterEvent',//事件类绑定一个事件标识


        //事件订阅使用到的两个事件类
        'DateEvent' =>'\app\event\DateEvent',  //约会事件
        'GreetEvent'=>'\app\event\GreetEvent',//问候事件


    ],

    //事件监听
    'listen'    => [
        //内置的系统事件
        'AppInit'  => [],
        'HttpRun'  => [],//应用开始标签位
        'HttpEnd'  => [],//应用结束标签位	当前响应对象实例
        'LogLevel' => [],//日志write方法标签位 当前写入的日志信息
        'LogWrite' => [],//路由加载完成


        //自定义事件
        'RegisterEvent'=>['app\listener\RegisterEventListener'],//或者：[app\listener\RegisterEventListener::class]
        'GreetEvent'=>['app\listener\GreetEventListener'],//或者：[app\listener\RegisterEventListener::class]

    ],

    'subscribe' => [
        #'app\subscribe\MySubscribe',//注册事件订阅者
    ],















];
