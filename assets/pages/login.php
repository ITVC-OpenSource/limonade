<?php
include(__DIR__ . '/header.php');
?>
<div class="row">
  <form class="login-form text-seconderay" style="flex-direction: column;" action="logina.php" method="post">
    <div dir="rtl" class="input-group" data-why="uname">
      <span class="input-group-text text-secondary" id="basic-addon1">نام کاربری:</span>
      <input name="uname" dir="ltr" type="text" class="form-control" autocomplete="off">
    </div>
    <div dir="rtl" class="input-group" data-why="passw">
      <span class="input-group-text text-secondary" id="basic-addon2">رمزعبور:</span>
      <input name="passw" dir="ltr" type="text" class="form-control" autocomplete="off">
    </div>
    <div dir="rtl" class="form-check" style="margin: 20px 5px 0 5px;">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
      مرا به خاطر بسپار
      </label>
    </div>
    <div class="text-center sub-btn">
      <button type="submit" name="login" id="send" class="btn btn-primary">ورود</button>
    </div>
  </form>
</div>
