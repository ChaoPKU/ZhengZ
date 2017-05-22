<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$str = '13800138000 , 13426060134 ';

$patt = '/(\d{3})\d{4}(\d{4})/';

echo preg_replace($patt,'\1****\2',$str);

?>