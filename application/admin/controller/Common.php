<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/4/7 0007
 * Time: 15:51
 */

namespace app\admin\controller;
use think\Controller;
use think\facade\Session;

class Common extends Controller
{
    protected function  initialize(){

        //判断session是否赋值，如果存在并且时间大于设置的session.expire的时间，则清除session值并且重返登录界面
        if(Session::has('nickname')!="" && time() - Session::get('session_start_time') > config('session.expire'))
        {
            Session::clear();//清除session
            //$this->fetch('admin@login/login',['title' => lang('login_login_text')]);
            $this->redirect('Login/login');
        }
    }

    //判断是否登陆
    protected function is_login(){
        if(!Session::has('nickname'))
        {
            $this->error('Sorry..您尚未登录，请您先登录！', 'Login/login','',6 );
            // $this->redirect('Login/login');
        }


        /*if(Session::has('nickname'))
        {
            $this->assign("status",'1');

        }*/


    }


}