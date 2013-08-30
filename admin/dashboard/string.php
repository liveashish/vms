<?php
$string = "127636DSC";
preg_match_all('/([0-9]+|[a-zA-Z]+)/',$string,$matches);
//print_r($matches);
//echo $string;
echo $test= $matches[0][0];
echo $test/2;
?>