<?php

namespace app\home\validate;

use think\Validate;

class Login extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */

    protected $rule = [
        'username'  =>  'require|length:2,18',
        'password' =>  'require|max:64',
        "idcard"    => 'require|length:0,18',
    ]; // 错误提示
    protected $message  =   [
        'username.require' => '名称必须填写',
        'username.length' => '名称长度不能小于2大于18位',
        'password.require' => '密码必须填写',
        'idcard.require' => '身份证必须为18位',
    ];

    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */


}
