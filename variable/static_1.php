<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/9
 * Time: 17:46
 */

//静态变量
//仅在局部函数域中存在，但当程序执行离开此作用域时，其值并不丢失
function test(){
    static $a = 0;
    echo $a,PHP_EOL;
    $a++;
}
test();
test();
test();
echo "<br/>";

//递归
function test2(){
    static $count = 0;
    $count ++;
    echo $count,PHP_EOL;
    if($count<10){
       test2();
    }
    $count --;
}
test2();
echo "<br/>";

//递归自写
function test3(){
    static $cnt = 0;
    $cnt ++;
    echo $cnt,PHP_EOL;
    if($cnt>=10){
        return;
    }
    test3();
}
test3();
echo "<br/>";

static $int = 1;
//static $int = 1+2;//静态变量如果在声明中用表达式的结果对其赋值会导致解析错误
echo $int;