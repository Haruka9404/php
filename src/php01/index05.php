<?php
for ($i = 0; $i <= 10; $i++) {
    if($i>0 && $i%2==0){
        echo $i;
        echo "<br/>";
    }
}

for ($i = 1; $i <= 5; $i++) {
    echo $i * 2 . '<br />';
}

$count = 0;
// while ($count < 20) {
    // $count += 1;
    // echo $count.'<br />';
// }

while ($count <= 100) {
    if ($count == 20) {
        break;
    }
    if ($count % 3 == 0) {
    $count++;
    continue;
    }
    echo $count.'<br />';
    $count++;
}

$i = 0;
while ($i < 5) {
    echo $i . '<br />';
    $i++;
}

$number = 0;
do {
    echo $number . '<br />';
    $number++;
} while ($number < 5);

// num = 0
// num = 1
// num = 2

$num = 0;
do {
    echo "num = ".$num . '<br />';
    $num++;
} while ($num < 3);