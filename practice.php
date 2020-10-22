<?php
echo 'hello php!'. "\r\n";
//１。課題
$a = 3;
$b = 7;
echo $a + $b . "\r\n"; 

//２。課題
$array_month = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"];
echo $array_month [7] . "\r\n";

//３。課題
$hello = "Hello";
$name = "Rie";
$world = "'s World!";
echo $hello.$name.$world. "\r\n";

//４。課題
$tech_boost = 'tech';
$tech_boost .= 'boost';
echo $tech_boost. "\r\n";

//５。課題
//$2018 => はじめが数字だからNG
//{} => []
//"2月"、 => カンマが全角になっている
//"June"= => >が入っていない
//10月 => "10月"
//"12月"　=>　カンマがない

$calendar_2018 = [
    "January" => "1月",
    "February" => "2月",
    "March" => "3月",
    "April" => "4月",
    "May" => "5月",
    "June" => "6月",
    "July" => "7月",
    "August" => "8月",
    "September" => "9月",
    "October" => "10月",
    "November" => "11月",
    "December" => "12月",
];
echo $calendar_2018["December"];

?>