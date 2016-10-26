<?php
	$a1 = array("school","hd","ztx","cfa");
	$a2 = array("school","hd");
	$a_diff = array_diff($a1,$a2);
	var_dump($a_diff);
	var_dump(current($a_diff));
	var_dump(next($a_diff));
?>