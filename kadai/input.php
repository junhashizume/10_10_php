<html>

<head>
    <meta charset="utf-8">
    <title>課題</title>
</head>

<body>
    <form action="write.php" method="post">
        お名前: <input type="text" name="name">様<br>
        EMAIL: <input type="text" name="mail"><br>
        年齢: <input type="text" name="age">歳<br>
        性別: <input type="radio" name="sex" value="male">男<input type="radio" name="sex" value="female">女
<br>
        身長: <input type="text" name="height">cm<br>
        体重: <input type="text" name="weight">kg<br>
        血液型 : <select name="blood">
                <option value="A">A型</option>
                <option value="B">B型</option>
                <option value="O">O型</option>
                <option value="AB">AB型</option>
                </select><br>
        <input type="submit" value="送信">
    </form>
    <p><a href="index.php">戻る</a></p>
</body>

</html>
