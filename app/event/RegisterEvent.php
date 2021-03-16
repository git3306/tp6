<?php
declare (strict_types = 1);

namespace app\event;

use app\model\User;

class RegisterEvent
{
    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
}
