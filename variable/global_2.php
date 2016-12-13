<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/9
 * Time: 17:21
 */

//用处同global。用法特殊：$GLOBALS 是一个关联数组，每一个变量为一个元素，键名对应变量名，值对应变量的内容
//即 $GLOBALS['a']同global $a
$a = 1;
$b = 2;
//$c;
$c = 6;
function Sum(){
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
    $GLOBALS['c'] = $GLOBALS['b'] + 1;
//    unset($GLOBALS['c']);//unset 可以销毁介个
//    $GLOBALS['c'] = null;
}

echo $a,$b,$c,PHP_EOL;
Sum();
echo $a,$b,$c,PHP_EOL;