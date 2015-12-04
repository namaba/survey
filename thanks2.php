<!DOCTYPE html>
<html>
<head>
  <meta charset='UTF-8'>
  <title>thanks</title>
</head>
<body>
  <?php
  $nickname=$_POST['nickname'];
  $email=$_POST['email'];
  $goiken=$_POST['goiken'];

  echo $nickname;
  echo '様<br/>';
  echo 'ご意見ありがとうございました<br/>';
  echo '頂いたご意見『';
  echo $goiken;
  echo '』<br/>';
  echo $email;
  echo 'にメールを送りましたのでご確認ください。';

  $mail_sub ='アンケート受け付けました';
  $mail_body = $nickname."様へ/nアンケートご協力ありがとうございました。";
  $mail_body=html_entity_decode($mail_body,ENT_QUOTES,'UTF-8');
  $mail_head='From:xxx@xxx.co.jp';
  mb_language('japanese');
  mb_internal_encoding('UTF-8');
  mb_send_mail($email,$mail_sub,$mail_body,$mail_head);
  ?>

</body>
</html>