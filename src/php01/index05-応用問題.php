<?php
$i=0;
for($i = 0;$i <= 50;$i++){
    if($i>0 && $i % 3 == 0 && $i % 5 ==0){
        echo $i.'FizzBuzz'.'<br/>';
        }
        elseif($i>0 && $i % 5 == 0){
            echo $i.'Buzz'.'<br/>';
        }
        elseif($i>0 && $i % 3 == 0){
            echo $i.'Fizz'.'<br/>';
        }
        else{
            echo $i.'<br/>';
        }
    }

$num=0;
for($num = 0;$num < 5;$num++){
    for ($j = 0; $j < 5; $j++) {
    echo "●";
    }
    echo "<br />";
    }
