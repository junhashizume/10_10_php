<?php
// ファイルを開く
$openFile = fopen('./data/data.txt', 'r');

// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($openFile)){
    echo nl2br ($str); // write.phpの\nをbrに変更

    $newStr = explode(',', $str);
foreach ($newStr as $key => $val) {
    echo '<td>' . $newStr[$key] . '</td>';
}
echo '</tr>';

}



// ファイルを閉じる
fclose($openFile);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート結果一覧</title>
</head>
<body>
<h1>アンケート結果一覧</h1>
    <table>
        <tr>
        <th>日時</th>
        <th>名前</th>
        <th>メールアドレス</th>
        <th>年齢</th>
        <th>性別</th>
        <th>身長</th>
        <th>体重</th>
        <th>血液型</th>
        </tr>
        
        <?php foreach($root as $column);?>
        <tr>
            <td><?php echo $column['time'] ?></td>
            <td><?php echo $column['name'] ?></td>
            <td><?php echo $column['mail'] ?></td>
            <td><?php echo $column['age'] ?></td>
            <td><?php echo $column['sex'] ?></td>
            <td><?php echo $column['height'] ?></td>
            <td><?php echo $column['weight'] ?></td>
            <td><?php echo $column['blood'] ?></td>
        </tr>


    </table>    

    <a href="index.php">HOME</a>
</body>
</html>
