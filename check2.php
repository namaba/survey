<!DOCTYPE html>
<html>
<head>
  <meta charset='UTF-8'>
  <title>アンケート</title>
  <link rel="stylesheet" type="text/css" href="">
</head>
<body>
  <?php
  $nickname = $_POST['nickname'];
  $email=$_POST['email'];
  $goiken=$_POST['goiken'];

  if($nickname==''){
    echo 'ニックネームが入力されていません';
  }
  else{
    echo 'ようこそ';
    echo  $nickname;
    echo '様';
    echo '<br>';
  }

  if($email==''){
    echo 'メールアドレスが入力されていません';
  }
  else{
    echo 'メールアドレス';
    echo  $email;
    echo '<br>';
  }

  if($goiken==''){
    echo 'ご意見が入力されていません';
  }
  else{
    echo 'goiken';
    echo  $goiken;
    echo '様';
  }

  if($nickname==''||$email==''||$goiken==''){
    echo '<form>';
    echo '<input type="button" onclick="history.back()" value="戻る">';
    echo '</form>';
  }
  else{
    echo '<form method="post" action="thanks.php">';
    echo '<input name="nickname" type="hidden" value="'.$nickname.'">';
    echo '<input name="email" type="hidden" value="'.$email.'">';
    echo '<input name="goiken" type="hidden" value="'.$goiken.'">';
    echo '<input type="button" onclick="history.back()" value="戻る">';
    echo '<input type="submit" value="ok">';
    echo '</form>';
  }
  ?>


</body>
</html>