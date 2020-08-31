<?php include 'db.php'; ?>
<?php include 'home.php'; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="dns-prefetch" href="//fonts.googleapis.com">
  <link rel="dns-prefetch" href="//m.thang.pro">
  <link rel="dns-prefetch" href="//i.imgur.com">

  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">

  <title><?php echo $home->title($_SERVER['SCRIPT_NAME']); ?></title>

  <meta name="description" content="Thang.Pro - Website chia sẻ code, mã nguồn, giao diện mẫu cùng với đó là các công cụ tiện ích do Desod phát triển và cung cấp miễn phí cho mọi người">
  <meta name="keywords" content="code, template, thang.pro, front-end, back-end, mobile, development, tools, thang pro, desod-vn, mhack.mobi, wapvn, quyetdaik, hack game, lam web, hoc lap trinh..">
  <meta name="author" content="Thang Vuong">
  <meta name="designer" content="Thang Vuong">
  <meta name="subject" content="Sharing, Tools">
  <meta name="copyright"content="Vuong Toan Thang, Desod">
  <meta name="language" content="VN">
  <meta name="robots" content="index,follow" />

  <link rel="shortcut icon" type="image/png" href="/img/icon.png">
  <script src="m/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
