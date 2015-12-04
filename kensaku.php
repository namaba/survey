<!DOCTYPE html>
<html>
<head>
  <meta charset='UTF-8'>
  <title>一覧</title>
</head>
<body>
  <?php
    $code = $_POST['code'];

    $dsn = 'mysql:dbname=phpkiso;host=localhost';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn,$user,$password);
    $dbh->query('SET NAMES utf8');

    // $SQL文
    $sql = 'SELECT * FROM `survey` WHERE code=?';
    $date[] = $code;

    // SQL文実行
    $stmt = $dbh->prepare($sql);
    $stmt->execute($date);

    //実行結果として得られたデータを表示
    $rec = $stmt->fetch(PDO::FETCH_ASSOC);
    // ↑これで配列の形にしている（取得してきたデータは配列になっていないため）

    echo $rec['code'];
    echo $rec['nickname'];
    echo $rec['email'];
    echo $rec['goiken'];

    // DB接続を削除
    $dbh = null;

  ?>

</body>
</html>