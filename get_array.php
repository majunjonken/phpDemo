<?php

//想通过Get传数组，需要先转成Json然后再解Json
if($_GET)
{
	var_dump(json_decode($_GET["a1"],true));
}
else
{
	$a = array("sc","zx");
	$a1 = json_encode($a);
	// echo $a1;die();
	echo '<form action="#" method="get">';
	echo '<input type="hidden" name="a1" value='.$a1.'>';
	echo '<input type="submit"></form>'; 
}
?>