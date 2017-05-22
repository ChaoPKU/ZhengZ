<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$str = 'tom李';

$patt = '/^[\x{4e00}-\x{9fe5}]$/u';

echo preg_match_all($patt,$str)?'纯的':'混的';

?>