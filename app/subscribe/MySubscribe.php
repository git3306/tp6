<?php
declare (strict_types = 1);

namespace app\subscribe;



use think\Event;
use think\facade\Log;

class MySubscribe
{
    #protected $eventPrefix = 'text';


    //监听事件的方法命名规范是on+事件标识（驼峰命名），如果希望统一添加事件前缀标识，可以定义eventPrefix属性。

    public function onGreetEvent($great)
    {
        echo '问候女朋友：'.$great.'<br/>';
    }

    public function onDateEvent($action)
    {
        echo '约会：'.$action.'<br/>';
    }


    public function subscribe(Event $event)
    {
        $event->listen('GreetEvent', [$this,'onGreetEvent']);
        $event->listen('DateEvent',[$this,'onDateEvent']);
    }
}
