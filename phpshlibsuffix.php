<?php
//PHP_SHLIB_SUFFIX-貌似是获取系统的扩展类型名称
echo PHP_SHLIB_SUFFIX,PHP_EOL;

//PHP_OS-获取系统操作类型
echo PHP_OS,PHP_EOL;

//php_uname-获取系统有关信息 -- http://php.net/manual/zh/function.php-uname.php
echo php_uname("s"),PHP_EOL;


//dl()例子:
//eg1:加载一个扩展的例子，基于操作系统
if(!extension_loaded('sqlite')){
	if(strtoupper(substr(PHP_OS,0,3) === 'WIN')){
		dl('php_sqlite.dll');
	}
	else{
		dl('sqlite.so');
	}
}
//eg2:或者,使用常量 PHP_SHLIB_SUFFIX
if(!extension_loaded('sqlite')){
	$prefix = (PHP_SHLIB_SUFFIX === 'dll') ? 'php_' : '';
	dl($prefix . 'sqlite' . PHP_SHLIB_SUFFIX);
}
?>