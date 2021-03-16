<?php
namespace app\admin\controller;

use app\BaseController;
use think\facade\Log;

class Index extends BaseController
{
    public function index()
    {
        return 'admin';
    }


    public function log()
    {
        Log::record('Log门面静态调用:','info',['22222']);
    }
}
