<?php
// php -f 执行php脚本？
//获取函数参数和数量
//func_get_args()		获取传来的参数(array)，不对【默认参数】有效
//func_num_args()		获取传来参数的数量(int)
// func_get_arg($num) 	配合 func_num_args()作为$num值 使用,获取传来的其中一个参数

function fun1(){
	var_dump(func_get_args(),func_num_args());
	for($i=0;$i<func_num_args();$i++){
		var_dump(func_get_arg($i));
	}
	echo "<hr/>";
}

function fun2($a=1,$b="heiheihei"){
	var_dump(func_get_args(),func_num_args());
	echo "<hr/>";
}

fun1(1,1,1,1,1,1);
fun1("1111","1112","4111","3111");
fun1(array(1,1,1,2));
fun1(array("aaa"=>"wwwwww",1,1,2),"2131",false);
echo "+++++++++++++++++++++++++>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>><br/>";
fun2();
fun2("WWW");
fun2("1111",2222,"FFFFFFFF",23333);
?>