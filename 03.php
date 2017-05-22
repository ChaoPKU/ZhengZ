<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$arr = array('13800138000','13426060134','170235','18289881234568782');
//$patt = '/^[0123456789]{11}$/';
$patt = '/^[^47]{11}$/';
foreach($arr as $k=>$v) {
	preg_match_all($patt,$v,$src);
	var_dump($src);
}

?>