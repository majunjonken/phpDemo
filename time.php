<?php
echo date('Y-m-d',time())."<br/>";
echo date('Y-01-01', time())."<br/>";
echo date('Y-m-d',mktime(0,0,0,12,31,2015)).'<br/>';
				$data=date('Y-m-d',time());
				$data_element=explode('-', $data);
				$data_last=($data_element[0])-1;
				$startTime = date('Y-m-d',mktime(0,0,0,1,1,$data_last));
				$endTime = date('Y-m-d-H-i-s',mktime(23,59,59,12,31,$data_last));
				echo $startTime.'___'.$endTime.'<br/>';

echo strtotime("2:00").'<br/>';
echo strtotime("01:06").'55555555555555555555555<br/>';
$time=4324;
$minute=(int)($time/60);
$second=$time-$minute*60;
echo $minute.':'.$second.'<br/>';
echo date('i:s',strtotime("4324")).'<br/>';
$tesr=60*60+15*60;
$tesr=1457944929;
$tesr=2*60*60+15*60;
echo date('Y-m-d-H-i-s',$tesr).'<br/>';
$tesr=60*60+15*60;
$tesr=time();
echo date('Y-m-d-H-i-s',$tesr).'<br/>';
echo date('H-i-s',$tesr).'<br/>';
echo date('-Y-',$tesr).'<br/>';
echo date('-m-',$tesr).'<br/>';
echo date('-d-',$tesr).'<br/>';

?>