<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<?php
// require_once('config.php');
// echo $_POST['email_tra'];
$email = $_POST['email_tra'];


define('DSN', 'mysql:host=localhost;dbname=mail_list');
define('DB_USER', 'root');
define('DB_PASS', '19960701mysql');

//データベースへ接続、テーブルがない場合は作成
try {
  $pdo = new PDO(DSN, DB_USER, DB_PASS);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec("create table if not exists mailDeta(
      id int not null auto_increment primary key,
      email varchar(255),
      password varchar(255),
      created timestamp not null default current_timestamp
    )");
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}

//POSTのValidate。
// if (!$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  if (!$email = filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo '入力された値が不正です。';
  return false;
}


$stmt = $pdo->prepare("select email from mailDeta where email = ?");
$stmt->execute([$email]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
//データベース内のメールアドレスと重複していない場合、登録する。
if (!isset($row['email'])) {
  $stmt = $pdo->prepare("insert into mailDeta(email) value(?)");
  $stmt->execute([$email]);
  echo "string";
  echo '登録完了';
}else{
  echo'登録済みのメールアドレスです。';
}
?>

</body>
</html>
