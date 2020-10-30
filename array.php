<?php
$arr1=['a','b'];
$arr2=['c'];

$mergeArr=array_merge($arr1,$arr2);

var_dump($mergeArr);
echo '<br>';

$arr1=['a'=>1,'b'=>2];
$arr2=['a'=>2,'c'=>3];

$addArr=array_merge($arr1,$arr2);
var_dump($addArr);
echo '<br>';

$arr1=['a'=>1,'b'=>2,'c'=>3];
var_dump($arr1);
echo '<br>';
$key=array_keys($arr1);
echo 'key值：';
echo '<br>';
var_dump($key);
echo '<br>';
$value=array_values($arr1);
echo 'value值：';
echo '<br>';
var_dump($value);
echo '<br>';
arsort($arr1);
echo '降序：';
echo '<br>';
var_dump($arr1);
echo '<br>';
$arr1=['a'=>1,'b'=>2,'c'=>3];
echo '<br>';
var_dump($arr1);
echo '<br>';
$arr2=['d'=>4];
$arr5=array_merge($arr2,$arr1);
echo '<br>';
echo '开头插入数值4：';
echo '<br>';
var_dump($arr5);
echo '<br>';
array_unshift($arr1,['d'=>4]);
echo '<br>';
echo '开头插入数组数组d=4：';
echo '<br>';
var_dump($arr1);
echo '<br>';


?>