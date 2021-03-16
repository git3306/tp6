<?php
declare (strict_types = 1);

namespace app\listener;

use think\facade\Log;


class RegisterEventListener
{
    /**
     * 事件监听处理
     *
     * @param $user
     * @return mixed
     */
    public function handle($user)
    {
        Log::info('事件监听：'.json_encode($user->toArray()));
    }
}
