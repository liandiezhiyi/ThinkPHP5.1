<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/4/2 0002
 * Time: 14:10
 */

//加载与controller对应的语言包
$controllers = getControllers('application/admin/controller');
$arr=array();
foreach ($controllers as $v)
{
   $arr[]= 'application/admin/lang/zh-cn/'.$v.'.php';
}
return array(
    // 是否开启多语言
    'lang_switch_on'         => true,
    // 默认语言
    'default_lang'           => 'zh-cn',

   //加载其它语言包（controller对应的语言包）
   // Lang::load( '../application/admin/lang/zh-cn/'.strtolower($vv).'.php'),
    Lang::load($arr),

    'dispatch_error_tmpl'    => Env::get('think_path') . 'tpl/error.html',






);
