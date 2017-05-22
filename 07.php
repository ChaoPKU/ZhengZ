<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$str = '老王 电话13800138000, 备用电话18902587413, QQ:258963,emai
l:wang@qq.com, 诚信买卖，身份证号101101197912123039';

$patt = '/\b1[3587]\d{9}\b/';

preg_match_all($patt,$str,$s);
var_dump($s);

?>