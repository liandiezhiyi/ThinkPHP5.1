<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Admin;
class Access extends Controller{
    //用户列表
    public function userList(){
        //调用模型层的方法
        $admin=new Admin();
        $userList=$admin->selectList() ;
       // dump($userList);
        /*foreach ($admin->selectList() as $key=>$val){
            $userList[$key]['id']=$val["id"];
            $userList[$key]['login_name']=$val["login_name"];
            $userList[$key]['group_name']=$val["group_name"];
            $userList[$key]['gen_time']=$val["gen_time"];
            $userList[$key]['last_login_ip']=$val["last_login_ip"];
            $userList[$key]['last_login_time']=$val["last_login_time"];

        }*/
        $this->assign("userList",$userList);
        return $this->fetch("userList",['title'=>lang('测试')]);

    }

    //角色列表
	public function roleList(){
        $admin=new Admin();
        $userList= $admin->selectList("group");
      dump($userList);
    }

    //权限列表
    public function accessList(){


    }
}

?>