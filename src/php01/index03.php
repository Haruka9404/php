<?php
$a = 15;
$b = 3;
$c = 10;

// echo $a + $b;
echo "<br/>";
// echo $a - $b;
echo "<br/>";
// echo $a * $b;
echo "<br/>";
// echo $a / $b;
echo "<br/>";
// echo $a % $c;

$d = 5;

// 3
// echo $a /= $d;
// echo "<br/>";
// 15
// echo $c += $d;

echo "<br/>";
$a = 20;
$b = 5;
$c = "20";

echo ($a > $b);
echo ($a !== $b);
echo "<br/>";

// 比較演算子と論理演算子を用いて$aが10より大きいかつ30より小さいことが正しいかechoを用いて出力してください。（正しいときは1が返ってきます。）

echo ($a > 10 && $a < 30);
echo "<br/>";

$a = 10;
$b = 10;
$c = 5;
$d = 5;

// 11
echo ++$a;
echo "<br/>";
// 10
echo $b++;
echo "<br/>";
// 出力した後に演算するため、++が後の出力で反映される
echo $b;
echo "<br/>";
// 4
echo --$c;
echo "<br/>";
// 5
echo $d--;
echo "<br/>";
// 出力した後に演算するため、--が後の出力で反映される
echo $d;
echo "<br/>";