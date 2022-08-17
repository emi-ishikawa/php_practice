<?php
$name = "Emi";

switch ($name) {
  case "Emi":
    echo "私はEmiです";
    break;
  default:
    echo "Emiではありません";
    break;
}
    echo "\n";


$total = 0;

for ($i =0; $i <=10000; $i++) {
    $total += $i;
}
echo $total;
echo"\n";

$fruits = array("banana","apple","orange","peach","mango");

foreach($fruits as $fruit) {
    echo $fruit;
    echo "\n";
}

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i . "\n";
  }
}