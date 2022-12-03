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
            <p class="title">
             地震速報
            </p>
            <form action="./qua_transfer_test.php" method="post">
              <!-- <input type="textarea" name="confirm" value=""> -->
              <label for="confirm0" class="label">地震発生テストボタン（仮）</label>
              <br>
              <br>
              <h3>ボタンを押すと、登録されているメールアドレスに地震速報メールが送信されます</h3>
              <br>
              <br>
              <input type="submit" value="-----" class="form">
            </form>
            <br>
            <hr>
            <h1>メールアドレス登録</h1>
            <details>
              <br>
              <br>
              <br>
              <br>
              <br>
              <form action="./mail_transfer.php" method="post" class="login">
                <input type="email" name="email" class="registration" placeholder="E-MAIL" required>
                <br>
                <br>
                <input type="submit" value="-----" class="login">
                <br>
                <br>
              </form>
            </details>
            <br>
            <br>
            <hr>
            <h1>メールアドレス登録解除</h1>
            <details>
              <br>
              <br>
              <br>
              <br>
              <br>
              <form action="./mail_del.php" method="post" class="del_email">
                <input type="email" name="del_email" class="delete_page" placeholder="E-MAIL" required>
                <br>
                <br>
                <input type="submit" value="-----" class="delete_button">
                <br>
                <br>
              </form>
            </details>
            <br>
            <br>
            <br>
    </div>
 </body>
</html>
