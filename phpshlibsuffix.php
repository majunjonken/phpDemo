<?php
//PHP_SHLIB_SUFFIX-ò���ǻ�ȡϵͳ����չ��������
echo PHP_SHLIB_SUFFIX,PHP_EOL;

//PHP_OS-��ȡϵͳ��������
echo PHP_OS,PHP_EOL;

//php_uname-��ȡϵͳ�й���Ϣ -- http://php.net/manual/zh/function.php-uname.php
echo php_uname("s"),PHP_EOL;


//dl()����:
//eg1:����һ����չ�����ӣ����ڲ���ϵͳ
if(!extension_loaded('sqlite')){
	if(strtoupper(substr(PHP_OS,0,3) === 'WIN')){
		dl('php_sqlite.dll');
	}
	else{
		dl('sqlite.so');
	}
}
//eg2:����,ʹ�ó��� PHP_SHLIB_SUFFIX
if(!extension_loaded('sqlite')){
	$prefix = (PHP_SHLIB_SUFFIX === 'dll') ? 'php_' : '';
	dl($prefix . 'sqlite' . PHP_SHLIB_SUFFIX);
}
?>