<?php
namespace app\admin\model;
use think\Model;
use think\db;
class Admin extends model
{
    public function selectList(){
       //$user=Admin::select();
        $userList[]="";
       foreach (Admin::select() as $key => $val){
         $access= db::name("access")->where("uid=".$val['id'])->select();
            foreach ($access as $k => $v){
               $group= db::name("group")->where('id='.$v['group_id'])->find();
                $groupName["group_name"][$k]=$group['title'];
                //取出需要展示的数据
                $userList[$key]['id']=$val["id"];
                $userList[$key]['login_name']=$val["login_name"];
                $userList[$key]['group_name']=implode("、",$groupName["group_name"]);
                $userList[$key]['gen_time']=$val["gen_time"];
                $userList[$key]['last_login_ip']=$val["last_login_ip"];
                $userList[$key]['last_login_time']=$val["last_login_time"];
            }
       }
        return $userList;
    }
}