<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/2
 * Time: 9:30
 * 关于文件操作： fopen/fread/fgets/fclose的练习
 */

$filename = "hello.txt";
//$filename = "E:\\WWW\\demo\\phpDemo\\file\\hello.txt";

//file_exists检测文件是否存在 - file_get_contents读取文件到字符串
//var_dump(file_exists($filename),file_get_contents($filename));
//die();

//fopen - 打开文件或者URL,参数详见http://php.net/manual/zh/function.fopen.php
//可以通过 @ 来屏蔽错误
//$handle = fopen($filename, "r");
$handle = fopen($filename, "rb");

//读取整个文件(filesize - 获取文件大小)
//$contents = fread($handle, filesize($filename));

//rewind - 将 handle 的文件位置指针设为文件流的开头。
rewind($handle);

//$content = array();
$content = "";
//feof - 测试文件指针是否到了文件结束的位置
while (!feof($handle)){

//    fgets - 逐行读取文件
//    $content[] = fgets($handle);

//    fread - 按字节读取文件
//    $content[] = fread($handle,4096);
//    $content[] = fread($handle,1024);
    $content .= fread($handle,1024).PHP_EOL;
}
//fclose - 关闭一个已打来的文件指针
fclose($handle);
print_r($content);