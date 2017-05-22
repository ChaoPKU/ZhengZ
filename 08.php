<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$str = 'txt hello, high, bom , mum';

$patt = '/\b([a-z])\w+\1/';

preg_match_all($patt,$str, $s);
var_dump($s);

?>
