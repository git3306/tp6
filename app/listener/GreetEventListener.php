<?php
declare (strict_types = 1);

namespace app\listener;

use think\facade\Log;


class GreetEventListener
{
    /**
     * 事件监听处理
     *
     * @param $greet
     * @return mixed
     */
    public function handle($greet)
    {
        Log::info('问候事件监听：'.$greet);
    }
}
