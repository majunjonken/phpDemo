<?php
	$array=array();
	$array[1]=111111;
	$array[3]=333333;
	var_dump($array);
	
	$arr = array(
		"hello" => array("k"=>"111111","k2"=>"222222"),
		"from" => array("k"=>"111111","k2"=>"222222"),
		"other" => array("k"=>"111111","k2"=>"222222")
	);
	
//	$arr1 = $arr;
	$arr1 = array(
		"side" => array("k"=>"111111","k2"=>"222222"),
	);
	
	$arr1 = array_merge($arr,$arr1);
	var_dump($arr1);
?>