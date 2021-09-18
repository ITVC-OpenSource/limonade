<?php
include('assets/php/dbconfndzjg.php');

function get_user_details($user_id)
{
  $result = file_get_contents("http://localhost:8080/" . "api/users/index.php?u=" . $user_id);
  echo $result;
}
function get_null_user_details()
{
  $result = file_get_contents("http://localhost:8080/" . "assets/php/404u.php");
  echo $result;
}
?>
