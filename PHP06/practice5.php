<?php
$str = "<hi>strip_tags関数</1>" . "<p>タグ</p>";
echo strip_tags($str);


$fruits = ['apple', 'orange', 'melon'];
array_push($fruits, 'banana', 'pineapple');
print_r($fruits);


$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);


echo 'タイム'.time();


$time = mktime(10, 10, 10);
var_dump(date('Y年m月d日h時i分s秒', $time));
print('<dr/>');


echo date('Y年m月d日 H時i分s秒');
echo '<br>';