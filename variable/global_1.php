<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/9
 * Time: 16:02
 */

//global的理解：在某一个局限范围内想拿到另外范围的变量，声明为global即可对于该变量取值/赋值
$a = 1;
$b = 2;
//$c;
$c = 6;
function Sum(){
    global $a,$b;
    $b = $a + $b;
    global $c;
    $c = $b + 1;
    unset($c);//unset 只能销毁局部变量，并不能销毁全局变量.So...手动销毁-->$c = null...方法二见global_2.php
}

echo $a,$b,$c,PHP_EOL;
Sum();
echo $a,$b,$c,PHP_EOL;
?>