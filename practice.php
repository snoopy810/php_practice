<?php
/*$name = "鈴木香織";
if ($name == "鈴木香織" ) {
  echo "私は $name です";
} else {
  echo "あなたの名前ではありません";
}


$total = 0;
for ($i = 1; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;


$fruits = ["orange", "kiwi", "banana", "coconut", "avocado"];
foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}
*/

$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++)
{
    if($i % 5 == 0){
      echo $i;
      echo "\n";
    }
}
