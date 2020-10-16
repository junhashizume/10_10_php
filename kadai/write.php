<?php
date_default_timezone_set('Asia/Tokyo');

$name = $_POST['name'];
$mail = $_POST['mail'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$blood = $_POST['blood'];
$strBlood = str_replace('型','', $blood); 
// ファイルに書き込み
$time = date("Y年m月d日 H時i分s秒");
$str = $time . '<br>' . $name . '<br>' . $mail . '<br>' . $age.'<br>' . $sex.'<br>'. $height.'<br>' . $weight .'<br>'. $strBlood.'<br>'; //.は演算子 .は半角スペース推奨

//文字作成
$file = fopen('./data/data.txt', 'a');
fwrite($file, $str . "\n"); //テキストファイルの中で改行
fclose($file);


?>

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>
    <h1>ありがとうございました。<br></h1>
    <p>ご入力内容<br><?= $str ?></p>
    <ul>
        <li><a href="index.php">戻る</a></li>
    </ul>
</body>

</html>
