<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/
$h = curl_init();//初始化
//设置选项 非常重要 CURL的所有功能和操作，基本上都在这里完成
curl_setopt($h,CURLOPT_URL,'http://localhost/second/zhengze/zz.php');
curl_setopt($h,CURLOPT_RETURNTRANSFER,1);
curl_setopt($h,CURLOPT_HEADER,0);


$i = curl_exec($h);

curl_close($h);

echo $i;

?>