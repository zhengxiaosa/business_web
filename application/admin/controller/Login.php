<?php
namespace app\admin\controller;
use app\admin\common\Base;
use app\admin\model\Admin as AdminModel;
use think\Controller;

class Login extends Controller
{
    public function index()
    {
        return $this->fetch('login');
    }
    public function check(){
        $status = 1;
        $data = $this->request->param();
        $username = $data['user_name'];
        $password = md5($data['password']);

        $map= ['user_name'=>$username];
        $admin = (new AdminModel())->where($map)->find();

       if(is_null($admin)){
           $message='用户名不正确';
       }elseif($admin->password !=$password){
            $message = '密码不正确';
       }else{
           $status = 1;
           $message = '认证通过，请点击进入后台';
           $admin->setInc('login_count');
           $admin->save(['last_time'=>time()]);

           session('user_id',$username);
           session('user_info',$data);
       }
       return ['message'=>$message,'status'=>$status];
    }
    public function loginOut(){
            session('user_id',null);
            session('user_info',null);
            $this->success('注销成功，即将返回登录页','admin/Login/index');
    }
}
