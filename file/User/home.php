<?php
ini_set('display_errors', 0);
session_start();
require_once("../dbconnect.php");
require_once("../functions/user/makeTable.php");

$_SESSION["message"] = NULL;
$_SESSION["login_user"] = NULL;

$error = $_SESSION["message"] ? $_SESSION["message"] : NULL;
$_SESSION["message"] = NULL;

// トークン生成
$_SESSION["token"] = base64_encode(openssl_random_pseudo_bytes(32));
$token = $_SESSION["token"];

// テーブル作成
makePreRegistrationTable();
makeRegistrationTable();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>利用者用紹介ページ</title>
</head>
<body>
  <h1>利用者用紹介ページ</h1>
  <?php if($error): ?>
    <h2 style="color:red"><?= $error ?></h2>
  <?php endif; ?>
  <?php if(!$_SESSION["login_user"]): ?>
    <a href="./SignUp/pre_signup.php">新規登録ページへ</a>
    <a href="./LogIn/login.php">ログインページへ</a>
  <?php else: ?>
    <a href="./LogIn/logout.php">ログアウト</a>
    <a href="./mypage.php">マイページへ</a>
  <?php endif; ?>
</body>
</html>