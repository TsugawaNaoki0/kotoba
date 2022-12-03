<!DOCTYPE html>
<html lang="ja">
 <head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="./home.css">
   <title>HallowinGhost</title>
    <link rel="icon" href="./quake.png"><!-- タイトルにアイコンを設定 -->
    <link rel="apple-touch-icon" href="./quake.png"><!-- iphone のアイコンを設定 -->
 </head>
 <body>
    <div class="main">
      <link rel="stylesheet" href="./home.css">
      <div class="main">
        <?php

          $email = $_POST['email_tra'];

          define('DSN', 'mysql:host=localhost;dbname=mail_list');
          define('DB_USER', 'root');
          define('DB_PASS', '19960701mysql');

          $pdo = new PDO('mysql:host=localhost;dbname=mail_list', 'root', '19960701mysql');

          $result_rows = $pdo->query('select * from mailDeta;');
          $mail_list = array();

          foreach ( $result_rows as $row ) {

              $mail_list[] = $row['email'];

          }

          foreach ( $mail_list as $fruit ) {

            $hikisu = $hikisu.'"'.$fruit.'"';
            $hikisu = $hikisu." ";
          }
          // echo $hikisu;

          // echo "<br>";
          // echo "<br>";
          // echo "<br>";
          // echo $del_mail;
          // echo "qwerty";
          // echo "<br>";

          $del_mail_del = $_POST['del_mail'];
          // echo $del_mail_del;

          // $mail_exist = $pdo->query("select email from mailDeta where email = '".$del_mail_del."';");
          $mail_exist = $pdo->query("select email from mailDeta;");

          // if(isset($mail_exist)) {
          // echo $mail_exist;

          $mail_exist_list = array();
          foreach ( $mail_exist as $row0 ) {

              $mail_exist_list[] = $row0['email'];

          }

          foreach ( $mail_exist_list as $fruit0 ) {

            $hikisu0 = $hikisu0.'"'.$fruit0.'"';
            $hikisu0 = $hikisu0." ";
          }
          // echo "<br>";
          // echo $del_mail_del;
          // echo $hikisu0;
          $sentence = "export LANG=ja_JP.UTF-8; python3 address_sort.py ".$del_mail_del." ".$hikisu0;
          echo shell_exec($sentence);

          // echo "string";

          $del_rows = $pdo->query("delete from mailDeta where email = '".$del_mail_del."';");
          // $del_rows = $pdo->query("delete from mailDeta where email = 'qq856533@gmail.com';");

          ?>
        <br>
        <br>
        <br>
        <div class="label">
          完了しました
          <br>
        </div>
        <br>
       <br>
      </div>

    </div>
 </body>
</html>
