<!--  -->
<?php

function dbConnect(){

    $dsn = 'mysql:host=localhost;dbname=kadai;charset=utf8';
    $user = 'kadai_user';
    $pass = '';
    
    try {
        $dbh = new PDO($dsn, $user, $pass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'Connection succeded';   
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
    return $dbh;
}

function getAlldata(){
    $dbh = dbConnect();
    $sql = 'SELECT * FROM kadai';
    $stmt = $dbh->query($sql);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
    // var_dump($result);
    $dbh = null;
}

$kadaiData = getAlldata();

function setCategoryName($category){
    if ($category === '1'){
        
    }
}

?>
<!--  -->


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
        
        <?php foreach($key as $column);?>
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
