<?php
function times2($max) {
    return $max *2;
}
echo times2(5) ."\n";

function add($a, $b) {
    return $a + $b;
}    
echo add(1,3) ."\n";



function product($arr){
    $result = $arr[0]; 
    for ($i = 1; $i < count($arr); $i++) {
            $result *= $arr[$i];
    }
    return $result;
}
echo product(array(1, 3, 5 ,7, 9)) ."\n";

function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    if($max_number < $a){
       $max_number = $a;
   }
}
  return $max_number;
}

echo max_array(array(6, 2, 3, 10, 5)) ."\n";


/*strip_tags*/
/*HTMLタグを取り除く*/

$varText = '<p><b>strip_tags()</b>関数のサンプル. <br /><a href="#">Sample</a>.</p>';
echo strip_tags( $varText ) ."\n";


/*array_push*/
/*配列に複数の要素を追加する*/

$fruits = ['apple', 'orange', 'melon'];
 
//array_pushを使用して要素を追加する
array_push($fruits, 'banana', 'pineapple');
 
print_r($fruits) ."\n";


/*array_merge*/
/*配列をマージ(結合）する*/

$items1 = ['item1', 'item2', 'item3'];
$items2 = ['item4', 'item5'];
$items3 = ['item6', 'item7'];
 
//配列を結合する
$item_merge = array_merge($items1, $items2, $items3);
 
print_r($item_merge) ."\n";


/*time*/
/*UNIXタイムスタンプ(コンピューターのシステム時刻の一種)を取得することができる関数*/

//現在のタイムスタンプを取得
$time1 = time();
 
//3日後のタイムスタンプを取得
$time2 = time() + (3 * 24 * 60 * 60);
 
if($time1 < $time2){
  echo '$time2が大きい値です' ."\n";
}


/*mktime*/
/*time関数と同じく、UNIXタイムスタンプを取得する関数*/
/*time関数は現在時刻のUNIXタイムスタンプを取得することができる*/
/*mktime関数は指定した日時のUNIXタイムスタンプを取得することができる*/

//指定した日時のタイムスタンプを取得
$timestamp = mktime(0, 0, 0, 8, 1, 2017);
echo $timestamp ."\n";


/*date*/
/*指定された日時を任意の形式でフォーマットし、日付文字列を返す関数*/


// 現在日付をフォーマットする
echo date('Y/m/d');
echo "\n";

// 現在日時をフォーマットする
echo date('Y-m-d H:i:s');
echo "\n";
echo date('Y年m月d日 H時i分s秒');
echo "\n";
