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
        <form action="./mail_reg.php" method="post" class="login">
          <!-- <label for="email">E-MAIL</label> -->
          <div class="label">
            以下のメールアドレスを登録しますか？
          </div>
          <?php
            $address = $_POST['email'];
          ?>
          <input type="textbox" class="email_tra" name="email_tra" value="<?php echo $address;?>" readonly="readonly">

          <button type="submit" class="login">はい</button>
          <!-- <button type="submit" class="login">いいえ</button> -->
          <br>
          <br>
          </form>

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
