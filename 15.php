<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$h = curl_init();
curl_setopt($h,CURLOPT_URL,'http://localhost/second/zhengze/zz.php');
curl_setopt($h,CURLOPT_RETURNTRANSFER,1);
curl_setopt($h,CURLOPT_POST,1);
curl_setopt($h,CURLOPT_POSTFIELDS,'id=2&name=a');
$i = curl_exec($h);
curl_close($h);
var_dump($i);

?>