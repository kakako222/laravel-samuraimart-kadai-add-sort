<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP+DB</title>
</head>
<body>
    <p>
        <?php
        $dsn = 'mysql:dbname=php_db;host=localhost;charset=utf8mb4';
        $user = 'root';
        $password = 'root';

        try{
            //データーベースの接続を試行する
            $pdo = new PDO($dsn, $user, $password);
            //データーベースの接続に成功した時
            echo 'データーベースの接続に成功しました';
        } catch(PDOException $e) {
            //データーベースの接続に失敗した時
            exit('データベースの接続に失敗しました' . $e->getMessage());
        }
        ?>
        </p>
</body>
</html>