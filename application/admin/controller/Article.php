<?php
/**
 * Created by PhpStorm.
 * User: 36934
 * Date: 2019/2/21
 * Time: 22:21
 */

namespace app\admin\controller;
use app\admin\common\Base;

class Article extends Base
{
    public function index(){
      return  $this->fetch('article_list');
    }
}