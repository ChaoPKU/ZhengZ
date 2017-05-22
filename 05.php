<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

//$str = 'tommorw is another day , o2o , you dont bird me i dont bird
//you';

$str1 = 'a     b  			 heloo     world';
//$patt = '/\W{1,}/';
$patt1 = '/\s{1,}/';
echo preg_replace($patt1,' ',$str1);
exit();

preg_match_all($patt,$str,$src);
var_dump($src);
?>