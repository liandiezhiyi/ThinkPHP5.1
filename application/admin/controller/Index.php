<?php
namespace app\admin\controller;

class Index extends Common
{


   /* protected  function initialize()
    {
        $this->is_login();
       // parent::initialize();
        // TODO: Change the autogenerated stub
    }
*/
    public function index()
    {



       // $this->Is_power();
       $this->is_login() ;
        //dump($this->is_login());
       //$this->assign("test",$this->is_login());
       return $this->view->fetch("index",['title' => lang('主页')]);

    }
}