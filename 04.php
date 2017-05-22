<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$str = 'baidu o2o b2b2 c2c 123 heol xiling shuai chou bug';
$con = '/\b[a-zA-Z]{5,}\b/';
preg_match_all($con , $str ,$src);

var_dump($src);

?>