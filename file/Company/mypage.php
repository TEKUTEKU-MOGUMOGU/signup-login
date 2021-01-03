<?php
ini_set('display_errors', 0);
session_start();

if($_SESSION["login_company"] === NULL) {
  redirect("./home.php", "不正なアクセスです。");
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>マイページ</title>
</head>
<body>
  <h1>マイページ</h1>
  <a href="./LogIn/logout.php">ログアウト</a>
  <a href="./home.php">企業用紹介ページへ</a>
</body>
</html>