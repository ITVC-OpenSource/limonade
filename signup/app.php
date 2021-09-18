<?php
include('../assets/php/dbconfndzjg.php');
if (isset($_POST['signup'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $passw = $_POST['passw'];
  $passh = sha1($_POST['passw']);
  $query = "INSERT INTO `users` (fname , lname , uname , email , phone , passw) VALUES ('$fname' , '$lname' , '$uname' , '$email' , '$phone' , '$passh')";
  $quexe = mysqli_query($dbc , $query);
  $emque = "SELECT * FROM users WHERE email = '$email'";
  $unque = "SELECT * FROM users WHERE unama = '$uname'";
  $uqexe = mysqli_query($dbc , $unque);
  $eqexe = mysqli_query($dbc , $emque);
  if (!$uqexe) {
    echo "<p class='err'>" . $regerr . "</p>";
  }else {
    if (!$uqexe) {
      echo "<p class='err'>" . $regaerr . "</p>";
    }elseif (!$eqexe) {
      echo "<p class='err'>" . $regeaerr . "</p>";
    }else {
      echo "<p class='succ'>" . $regsucc . "</p>";
    }
  }
}
?>
