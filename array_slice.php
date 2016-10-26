<?php
$arr1 = array();
for($i=1;$i<9;$i++)
{
	$arr1[] = $i;
}


$arr2 = array();
for($j=1;$j<3;$j++)
{
	$arr2[] = $j;
}


$arr3 = array();
for($k=0;$k<3;$k++)
{
	for($l=0;$l<6;$l++)
	{
		$arr3[$k][$l] = $k."--".$l;
	}
}


print_r(array_slice($arr1,0,5));
echo "<hr/>";
print_r(array_slice($arr2,0,5));
echo "<hr/>";
print_r(array_slice($arr3,0,5));
echo "<hr/>";
print_r($arr3);


$arr3 = array();
for($k=0;$k<6;$k++)
{
	for($l=0;$l<6;$l++)
	{
		$arr3[$k][$l] = $k."--".$l;
	}
}


echo "<hr/>";
print_r(array_slice($arr3,0,5));
echo "<hr/>";
print_r($arr3);
?>