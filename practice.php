<?php
$a = 3;
$b = 7;
echo $a + $b . "\n" ;

$array_month = [
    "january" => "1月",
    "february" => "2月",
    "march" => "3月",
    "april" => "4月",
    "may" => "5月",
    "june" => "6月",
    "july" => "7月",
    "august" => "8月",
    "september" => "9月",
    "october" => "10月",
    "november" => "11月",
    "december" => "12月"
    ];
echo $array_month["august"] . "\n" ;

$hello = "Hello";
$name = " Emi";
$world = "'s World!";
echo $hello.$name.$world . "\n" ;

$tech_boost = 'tech ';
$tech_boost.= 'boost';
echo $tech_boost . "\n" ;

$calendar = [
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
  "December" => "12月"
];

// 12月を表示する
echo $calendar["December"] . "\n" ;
