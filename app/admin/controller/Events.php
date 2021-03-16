<?php
namespace app\admin\controller;

use app\BaseController;
use app\event\RegisterEvent;
use app\model\User;
use think\facade\Event;


class Events extends BaseController
{

    /**
        //事件、监听、订阅器三者的关系：
            //事件 ===》1个事件监听 ：一个事件，必须有对应的事件监听；
            //事件 ===》多个事件订阅：一个订阅器可以订阅多个事件；

            //事件监听 和 事件订阅 是没有关系的，事件监听 和 事件订阅器 都可以处理事件。
    */


    //事件&监听——实现方式1
    public function index()
    {
        /*
        //1.创建或生成事件、事件监听类文件
            #php think make:event    //生成事件类文件：\app\event\RegisterEvent.php
            #php think make:listener //生成事件监听类文件：\app\listener\RegisterEventListener.php

        //2.设置 批量绑定事件、事件监听
            //\app\event.php文件：
            return [
                //①批量绑定事件
                'bind'=> [
                    'RegisterEvent'=>'\app\event\RegisterEvent::class',//事件类绑定一个事件标识
                ],
                //②事件监听
                'listen'    => [
                    //内置的系统事件

                    //自定义事件
                    'RegisterEvent'=>['app\listener\RegisterEventListener'],//或者：[app\listener\RegisterEventListener::class]
                ],
            ];
        */

        //3.调用事件
            //访问：http://127.0.0.1:8000/admin/events
            event('RegisterEvent', User::find(1));//或者：event(new RegisterEvent(User::find(1)))

    }

    //事件&监听——实现方式2
    public function index2()
    {
        //1.生成事件类文件
            #php think make:event GreetEvent   //生成事件类文件：\app\event\GreetEvent.php

        //2.动态绑定事件(临时绑定，哪里用就在哪里绑定。)
            Event::bind(['GreetEvent' => 'app\event\GreetEvent']);

        //3.手动注册一个事件监听（无需创建监听类文件，直接同步处理）
            Event::listen('GreetEvent', function($greet) {
                dd($greet);//页面上打印：你好
            });
            //或者使用监听类来执行监听：Event::listen('UserLogin', 'app\listener\GreetEventListener');（需创建监听类文件）

        //4.调用事件
            event('GreetEvent', '你好');

    }


    //事件订阅
    public function index3()
    {
        //访问：http://127.0.0.1:8000/admin/events/index3

        /*
        //1.生成事件订阅类文件
            #php think make:subscribe MySubscribe      //app\subscribe\MySubscribe.php

        //2.生成 并 绑定 事件类文件
            //①生成两个事件类文件
                #php think make:event GreetEvent        //生成事件类文件：\app\event\GreetEvent.php
                #php think make:event DateEvent         //生成事件类文件：\app\event\DateEvent.php

            //②在事件配置文件中，批量绑定这两个事件、并注册事件订阅者（tp\app\event.php）
                return [
                    //批量绑定事件
                    'bind'      => [
                        //事件订阅使用到的两个事件类
                        'DateEvent'=>'\app\event\DateEvent::class',  //约会事件
                        'GreetEvent'=>'\app\event\GreetEvent::class',//问候事件


                        //注册事件订阅者（或者在控制器中动态注册：Event::subscribe('app\subscribe\User');）
                        'subscribe' => [
                            'app\subscribe\MySubscribe',
                        ],
                    ];
        */

        //动态注册订阅器（先把“tp\app\event.php”中的'subscribe' => ['app\subscribe\MySubscribe']注释掉）
            #Event::subscribe('app\subscribe\MySubscribe');//测试也是可以的


        //3.调用事件
            event('GreetEvent', '你好');
            event('DateEvent', '拉拉小手');


    }


}
