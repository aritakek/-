<?php
function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
    if($max_number < $a){
    $max_number = $a;
    }
  }

  return $max_number;
}
$arr = array(9, 13, 4, 2);
echo max_array($arr);