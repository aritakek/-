<?php
function multipl($arr){
    $result = 1;
    foreach($arr as $num){
        $result *= $num;
    }
    return $result;
}
$arr = array(1, 3, 5, 7, 9);
    echo multipl($arr);