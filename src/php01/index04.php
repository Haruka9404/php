<?php
$a = 5;
$a = 7;
// 後から書いた変数に上書きされる

if($a>7){
echo '$aは7以上です';
}elseif($a<7){
echo '$aは7以下です';
}
else{
echo '$aは7です';
}
echo "<br/>";

// ダブルクォーテーションは変数をそのまま受け取る
// シングルクォーテーションは変数も文字列として認識する
// ダブルクォーテーション内で変数を使うときはバックスラッシュ（＼）を使う必要がある
// *バックスラッシュはMacの場合 alt(option)+円マーク

$people = "Saburo";

switch ($people){
case "Saburo":
    echo "三郎です";
    break;
case "Jiro":
    echo "二郎です";
}
echo "<br/>";

$result = ($a==7) ? "TRUE" : "FALSE";
echo $result;