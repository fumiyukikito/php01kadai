<?php

$name = $_POST['name'];
$mail = $_POST['mail'];
$place = $_POST['place'];
 
$str ='名前:'.$name .' '.'Mail:'. $mail.' '.'出身地:'. $place;
// // ファイルに書き込み
// $time = date("Y-m-d H:i:s");
// $str = $time .' '. $name .' '. $mail.' '. $place; -->

//文字作成
$file = fopen('./data/data.text','a');
fwrite($file,$str . "\n");
fclose($file);
?>

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
 
    <h2>./data/data.txt を確認しましょう！
    <?= $str ?></h2>
    <ul>
        <li><a href="read.php">結果反映</a></li>
    </ul>
</body>

</html>

