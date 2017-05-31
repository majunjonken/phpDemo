<?php
$arr1 = array(1,2,3,3,2,3,1111);
var_dump(array_flip($arr1));
var_dump(array_flip(array_flip($arr1)));

var_dump(array_unique($arr1));
?>