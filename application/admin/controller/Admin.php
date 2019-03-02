<?php
/**
 * Created by PhpStorm.
 * User: 36934
 * Date: 2019/2/21
 * Time: 22:21
 */

namespace app\admin\controller;
use app\admin\common\Base;
use app\admin\model\Admin as AdminModel;
class Admin extends Base
{
    public function index(){
        $admin = AdminModel::get(['user_name'=>session('user_id')]);
        return  $this->fetch('admin_list',['admin'=>$admin]);
    }
    public function edit(){
        $id = input('post.id');
        $adminData = AdminModel::get($id);
        return $this->fetch('admin_edit',['adminData'=>$adminData]);
    }
}