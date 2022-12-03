import driver

print("<?php")
print("$time_from_python = shell_exec(\"export LANG=ja_JP.UTF-8; python3 times.py\");")



print("$email = $_POST[\'email_tra\'];")

print("define(\'DSN\', \'mysql:host=localhost;dbname=mail_list\');")
print("define(\'DB_USER\', \'root\');")
print("define(\'DB_PASS\', \'19960701mysql\');")

print("$pdo = new PDO(\'mysql:host=localhost;dbname=mail_list\', \'root\', \'19960701mysql\');")

print("$result_rows = $pdo->query(\'select * from mailDeta;\');")
print("$mail_list = array();")

print("foreach ( $result_rows as $row ) { $mail_list[] = $row[\'email\']; }")

print("foreach ( $mail_list as $fruit ) { $hikisu = $hikisu.\'\"\'.$fruit.\'\"\'; $hikisu = $hikisu.\" \";}")

print("$sentence = \"export LANG=ja_JP.UTF-8; python3 quake.py \".$hikisu;")
print("echo shell_exec($sentence);")

print("?>")

driver.refresh()
