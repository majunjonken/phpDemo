<?php
//ȡ��ָ��λַ�ă��ݣ��������� $text  
$text=file_get_contents('http://www.jb51.net/'); 
//ȡ�õ�һ�� img ��ǩ������������ά���� $match ��   
preg_match('/<img[^>]*>/Ui', $text, $match);
//��ӡ��match
print_r($match);
?>