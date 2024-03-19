<?php
function text($number1, $number2)
{
  $value = $number1 + $number2;
//   return $value;
  echo $value;
}

$total = text(1, 4);
echo $total;
echo text(2,4);
// echo $value;

// Q. 引数に $score1、$score2、$score3 を持ち、合計点が 210 より大きい時「合計点は OO なので合格です」、そうではなかったら「合計点は OO なので不合格です」と表示する関数を作りなさい。

function result($score1, $score2, $score3)
{
    // $total = $score1+$score2+$score3;
    // scoreの合計点を変数定義して、echo '合格点は'.（変数）.'点以上なので〜'とすることも可能
    if ($score1+$score2+$score3 >= 210){
    echo '合計点は210点以上なので合格です';
    } else {
    echo '合計点は210点以上なので不合格です';
    }
}
echo (result(70,70,70));

// function triangle($width1,$width2,$height){
    // $triangle = $width1*$height/2;
    // $box = $width1*$height;
    // $box2 = ($width1+$width2)*$height/2;
    // echo $triangle;
    // echo $box;
    // echo $box2;
// }

function triangle($width,$height){
    return $width*$height/2;
}
function square($width,$height){
    return $width*$height;
}
function box($width1,$width2,$height){
    return ($width1+$width2)*$height/2;
}
echo triangle(10,10);
echo square(20,20);
echo box(10,20,20);

