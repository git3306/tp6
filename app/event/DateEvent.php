<?php
declare (strict_types = 1);

namespace app\event;

class DateEvent
{
    public $action;

    public function __construct($action)
    {
        $this->action = $action;
    }
}
