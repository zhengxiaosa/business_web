<?php

namespace app\admin\model;

use think\Model;

class Admin extends Model
{
    protected $table = 'business.admin';

    protected function getLoginTextAttr($value,$data){
        return date('Y-m-d H:i:s',$data['last_time']);
    }
}
