<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/31 0031
 * Time: 10:30
 */

namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\facade\Session;
use think\Request;

class Login extends Controller
{
    //登录处理
    public function login()
    {
        if ($_POST) {

            if (!empty($_POST["login_name"]) && !empty($_POST["login_pwd"])) {
                $where['login_name'] = $_POST["login_name"];
                $where['password']=md5(md5($_POST["login_pwd"]));
                $res = Db::name('admin')->where($where)->find();

                if ($_POST["login_name"] == $res["login_name"] && md5(md5($_POST["login_pwd"])) == $res["password"]) {
                   
                        session('nickname', $res['login_name']);
                        session('uid', $res['id']);
                        session('session_start_time', time());

                    //登录成功后 修改登录时间、登录次数及登录IP地址
                   $data=[
                        "last_login_time"=> date("Y-m-d H:i:s",time()),
                        "count"=>$res["count"]+1,
                        "last_login_ip"=>request()->ip(),
                   ];

                    $condition['login_name'] = $_POST["login_name"];
                    $condition['id'] = $res["id"];
                    Db::name('admin')->where($condition)->data($data)->update();

                    return ['status' => 1, 'message' => lang('login_login_success')];
                } else {
                    return ['status' => 0, 'message' => lang('login_login_pwd_error')];
                }
            } else {
                return ['status' => -1, 'message' => lang('login_login_pwd_empty')];
            }
        } else {
           // return
            return $this->fetch("login", ['title' => lang('login_login_text')]);

        }


    }

    //注册用户
    public  function Registration(){
        if($_POST)
        {

        }

    }


    public function logout(){

        Session::clear();
        return $this->view->fetch("login", ['title' => lang('login_login_text')]);
    }


}
