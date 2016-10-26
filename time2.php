<?php
//echo 'This month has '.date('t',time()).'days~<br/>';
$d='2016-2-1';
$d=strtotime($d);
//echo 'This Fibrary has '.date('t',$d).'days~<br/>';
$d=getdate();
echo '<pre>';
//print_r($d);
echo '</pre>';
//echo mktime(22,40,32,28,23,2016).'<br/>';
$beginY=2008;
$beginM=8;
$beginYY=$beginY;
//echo (1%12).'++++'.(int)(10/12);

/*
for($a=1;$a<66;$a++)
{
	$m=$a+$beginM;
	echo 'Month------'.$m.'---------------'.(($m%12)?($m%12):12).'<br/>';
	$numM=date('t',strtotime($beginY.'-'.(($m%12)?($m%12):12).'-1'));
	//echo 'MonthDayNum:'.$numM.'<br/>';
	echo 'End:'.date('Y-m-d,H:i:s',mktime(23,59,59,$m,$numM,$beginYY)).'<br/>';
	$m+=1;
	echo 'Begin:'.date('Y-m-d,H:i:s',strtotime($beginY.'-'.(($m%12)?($m%12):12).'-1')).'<br/>';
	echo 'beginY--------'.$beginY.'<br/><br/><br/>';
	if((($m%12)==0)&&($m/12)>=1)
	{
		$beginY++;
	}
}
*/
?>