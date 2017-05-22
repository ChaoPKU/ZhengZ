<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$str = 'hello ,when i am working , don not coming';

$patt = '/\b\w+(?!ing)\w{3}\b/';

//$str = 'luck ,unlucky, state , unhappy';

//$patt = '/(?<=\bun)\w+\b/';
preg_match_all($patt,$str,$s);

print_r($s);

?>