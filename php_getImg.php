<?php
//取得指定位址的內容，并储存至 $text  
$text=file_get_contents('http://www.jb51.net/'); 
//取得第一个 img 标签，并储存至二维数组 $match 中   
preg_match('/<img[^>]*>/Ui', $text, $match);
//打印出match
print_r($match);
?>