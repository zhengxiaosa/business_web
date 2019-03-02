<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

class System extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        return $this->fetch('sys_set');
    }
}
