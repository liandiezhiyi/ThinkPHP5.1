<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/31 0031
 * Time: 10:30
 */

namespace app\home\controller;
use think\Controller;
use think\Db;
use think\facade\Session;

class Login extends Controller
{
    //登录处理
    public function login()
    {
        if ($_POST) {
            if (!empty($_POST["username"]) && !empty($_POST["password"])) {

                $res = Db::name('user')->where("username|mobile|email",$_POST["username"])->find();

                if ($_POST["username"] == $res["username"] ? $res["mobile"] : $res["email"] && md5(md5($_POST["password"])) == $res["password"]){
                    session('nickname', $_POST["username"]);
                    session('uid', $res['id']);
                    session('session_start_time', time());

                    //登录成功后 修改登录时间及登录次数
                    if(empty($res["login_time"])){
                        $data=[
                            "last_login_time"=> date("Y-m-d H:i:s",time()),
                            "login_time"=> date("Y-m-d H:i:s",time()),
                            "count"=>$res["count"]+1,
                             ];
                    }
                    else
                    {
                         $data=[
                             "last_login_time"=> date("Y-m-d H:i:s",time()),
                             "count"=>$res["count"]+1,
                            ];
                    }
                   
                    Db::name('user')->where("username",$_POST["username"])->data($data)->update();

                    return ['status' => 1, 'message' => lang('home_login_success')];
                }
                else {
                    return ['status' => 0, 'message' => lang('home_pwd_error')];
                }
            }
            else {
                return ['status' => -1, 'message' => lang('home_pwd_empty')];
            }
        }
        else {
           // return
            return $this->fetch("login", ['title' => lang('home_login_text')]);

        }


    }


    //注册用户
    public  function register(){
        if($_POST)
        {
            $result = $this->validate(
                [
                    "username"  => $_POST["username"],
                    "password"  => $_POST["password"],
                   // "email"     => $_POST["email"],
                   // "mobile"    => $_POST["tel"],
                    "idcard"    => $_POST["idCard"],
                   // "address"   => $_POST["address"],
                   //"gen_time"  =>  date("Y-m-d H:i:s",time()),
                ],
                'app\home\validate\Login');

            if (true !== $result) {
                // 验证失败 输出错误信息
               return $result;
            }

            $data=[
                    "login_name"  => $_POST["username"],
                    "username"  => $_POST["username"],
                    "password"  => md5(md5($_POST["password"])),
                    "email"     => $_POST["email"],
                    "mobile"    => $_POST["tel"],
                    "idcard"    => $_POST["idCard"],
                    "address"   => $_POST["address"],
                    "gen_time"  =>  date("Y-m-d H:i:s",time()),
                ];

                    $reidcard=Db::name('user')->where('idcard',$_POST["idCard"])->find();

                    if($reidcard['idcard']==$data['idcard'])
                    {
                        return ['status' =>-1, 'message' => lang('home_idCard_register_rpt')];
                    }
                    else
                    {
                         $res= Db::name('user')->insert($data);
                         if($res)
                        {
                            return ['status' => 1, 'message' => lang('home_register_success')];
                        }
                        else {
                            return ['status' => 0, 'message' => lang('home_register_error')];
                        }
                
                    }
                    


        }
        else {
            return $this->fetch("login", ['title' => lang('home_login_text')]);
        }

    }


    public function logout(){
        Session::clear();
        return $this->view->fetch("login", ['title' => lang('login_login_text')]);
    }
}
