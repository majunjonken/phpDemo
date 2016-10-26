<?php
$numbers = range (1,40);
var_dump($numbers);
echo '<hr/>';
shuffle ($numbers);
var_dump($numbers);
echo '<hr/>';
$result = array_slice($numbers,0,10); 
print_r($result); 
?>