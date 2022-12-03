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
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="label">
          地震が発生しました[これは本番です]
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      <?php
        $time_from_python = shell_exec("export LANG=ja_JP.UTF-8; python3 times.py");

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

        $sentence = "export LANG=ja_JP.UTF-8; python3 quake.py ".$hikisu;
        echo shell_exec($sentence);

       ?>

       <div class="timestamp">
         <?php echo $time_from_python
          ?>
          <br>
          <br>
          <br>
          <br>
          <br>

       </div>
      </div>

    </div>
 </body>
</html>










<?php


  // echo shell_exec("export LANG=ja_JP.UTF-8; python3 revolving.py ".$_POST["confirm0"]." ".$_POST["confirm1"]." ".$_POST["confirm2"]);
  // echo shell_exec("export LANG=ja_JP.UTF-8; python3 graph_maker.py ".$_POST["confirm1"]." ".$_POST["confirm2"]);

  // echo shell_exec("export LANG=ja_JP.UTF-8; python3 quake.py ");

 ?>
