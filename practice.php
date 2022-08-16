<?php
$name = "emi";

switch ($name) {
  case "emi":
    echo "私はemiです";
    break;
  default:
    echo "emiではありません";
    break;
}

$total = 0;

for ($i =0; $i <=10000; $i++) {
    $total += $i;
}
echo $total;

$fruits = array("banana","apple","orange","peach","mango");

foreach($fruits as $fruit) {
    echo $fruit;
    echo "\n";
}