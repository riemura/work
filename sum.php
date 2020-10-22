<?php
//課題1.
function nibai($i){
    return $i *2;
}
echo nibai(8) ."\r\n";

//課題2.
function f($a, $b){
    return $a + $b;
}
echo f(3, 9)."\r\n";

//課題3.
$arr = array(1, 3, 5, 7, 9);
    function t($arr){
        $result = 1;
    foreach($arr as $a){
        $result *= $a;
    }
return $result;
}
echo t($arr)."\r\n";

//課題4.
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $arr = array(5,10,22,68,2,4);
 $max_number = $arr[0];
 foreach($arr as $a){
   if($max_number < $a){
       $max_number = $a;
   }
 }
 return $max_number;
}
echo max_array($arr) ."\r\n";




?>