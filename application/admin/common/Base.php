<?php
/**
 * Created by PhpStorm.
 * User: 36934
 * Date: 2019/2/21
 * Time: 20:42
 */
namespace app\admin\common;

use think\Controller;

class Base extends Controller
{
    public function _initialize(){
        parent::_initialize();
        $this->admin = session('user_id');
    }

    protected function isLogin(){
        if(is_null($this->admin)){
            $this->error('请先进行登录'.'admin/Login/index');
        }
    }
}