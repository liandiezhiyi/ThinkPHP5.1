<?php
/**
获取某个目录下的php文件名的函数
 */
function getControllers($dir) {
    $pathList = glob($dir . '/*.php');
    $res = [];
    foreach($pathList as $key => $value) {
        $res[] = basename($value, '.php');
    }
    return $res;
}

//根据thinkphp文件命名规则可以知道文件名和控制器的名称是一致的；
//根据thinkphp目录结构可以知道控制器目录的路径；
//$controllers = getControllers('../application/admin/controller');
//如果你的控制器目录不是tp的默认目录按照你项目的时间目录传递给getControllers函数




/**
获取某个控制器的方法名的函数
此方法过滤父级Base控制器的方法，只保留自己的
 */
function getActions($className, $base='\app\admin\controller\index') {
    $methods = get_class_methods(new $className());
    $baseMethods = get_class_methods(new $base());
    $res = array_diff($methods, $baseMethods);
    return $res;
}

//下面是获取Index控制中你定义的方法，在mobadmin的应用场景中$control由前端传入，这样就能够达到我选择某个一个控制器的时候，就会输出这个控制中定义的方法。
$control = 'Index';
$actions = getActions('app\admin\controller' . '\\' . $control);

//系统中所有控制的方法怎么获取呢？遍历所有控制器就可以。
$controllers =  getControllers('../application/admin/controller');
$actionsAll = [];
foreach( $controllers as $key=>$value) {
    $actions[$value] =  get_class_methods('app\admin\controller' . '\\' . $value);
}
