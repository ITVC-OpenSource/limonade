<?php
include("../../assets/php/dbconfndzjg.php");
if (isset($_GET['u'])) {
  $res = $PDO->query("SELECT * FROM `users` WHERE uname = '" . $_GET['u'] . "'");
  if ($res->rowCount() == 1) {
    $row = $res->fetch(PDO::FETCH_ASSOC);
    print_r($row);
  }
}else {
  $response['exist'] = false;
  $j_res = json_encode($response);
  echo $j_res;
}
?>
