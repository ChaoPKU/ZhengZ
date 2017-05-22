<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$str = 'hello WO
RLD, ChINa';

$patt = '/.+/s';
//$patt = '/\b[a-z]+\b/i';

preg_match_all($patt,$str,$s);
var_dump($s);

?>