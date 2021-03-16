<?php
declare (strict_types = 1);

namespace app\event;


class GreetEvent
{
    public $greet;

    public function __construct($greet)
    {
        $this->greet = $greet;
    }
}
