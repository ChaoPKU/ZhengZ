<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$str = 'hi his is this sthi';
$patt = '/\Bhi\B/';

preg_match_all($patt,$str,$src);
var_dump($src);

?>