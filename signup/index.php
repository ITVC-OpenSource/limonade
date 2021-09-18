<?php
session_start();
include('../assets/lang/farsi.php');
?>
<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="utf-8">
  <title>Multishare - Signup</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include('app.php'); ?>
    <form  action="" method="post">
      <input type="text" name="fname" placeholder="نام" dir="auto">
      <input type="text" name="lname" placeholder="نام خانوادگی" dir="auto">
      <input type="text" name="uname" placeholder="نام کاربری" dir="auto">
      <input type="email" name="email" placeholder="ایمیل" dir="auto">
      <input type="text" name="phone" placeholder="تلفن همراه" dir="auto">
      <input type="password" name="passw" placeholder="گذرواژه" dir="auto">
      <button class="signup" id="signup" type="submit" name="signup">ثبت نام</button>
    </form>
</body>
</html>
