<?php
namespace app\admin\controller;
use app\admin\common\Base;

class Category extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        return $this->fetch('category');
    }
}
