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
        <form action="./del_comp.php" method="post" class="del_email">
        <br>
        <div class="label">
          メール登録解除画面
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
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





        $del_email = $_POST['del_email'];
        echo "<br>";
        echo "<p class=\"sakujo\">以下のメールアドレスの登録を削除しますか？</p>";
        echo "<br>";

        ?><input type="textbox" class="del_mail" name="del_mail" value="<?php echo $del_email;?>" readonly="readonly">

        <?php

        // echo "<br>";
        // echo "string";
        // $sentence = "export LANG=ja_JP.UTF-8; python3 quake_test.py ".$hikisu;
        // echo shell_exec($sentence);

       ?>
         <br>
         <br>
         <input type="submit" value="はい" name="del_comp_btn" class="delete_button">
         <br>
         <br>
       </form>

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
      </div>

    </div>
 </body>
</html>
