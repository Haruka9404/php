<?php

$number = array(
    array('赤', '青', '黄色', '白', '紫'),
    array('red', 'blue', 'yellow', 'white', 'purple')
    // $numberから0,1どちらを取り出してもArrayになる
);

// echo $number[0];
// =>結果：Array

// echo $number[0][4];
// =>結果：白（一つ目のArrayリストの、4つ目の配列のデータを取り出す）

$count = rand(0, 4);

// echo $number[0][$count];
// echo '<br/>';
// echo $number[1][$count];
// echo '<br/>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>日本語</th>
            <td><?php echo $number[0][$count]; ?></td>
        </tr>
        <tr>
            <th>英語</th>
            <td><?php echo $number[1][$count]; ?></td>
        </tr>
    </table>
</body>

</html>