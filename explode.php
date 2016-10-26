<?php
$arr = array();
$str = "Hello,MOTO,";
$str = "Hello,MOTO";
//$str = "H,";
//$str = "";
//var_dump(explode(',',$str));
$arr = explode(',', $str);
if (empty($arr)) {
	echo "It is Empty!";
}
var_dump($arr);
//$aaaaa = 0;
//if (empty($a)) {
//	echo 'H';
//}
//if ('' == 0) {
//	echo 'P';
//}
?>