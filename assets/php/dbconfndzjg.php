<?php
$server = "http://localhost:8080/";
$dbh = "localhost";
$dbu = "root";
$dbp = "";
$dbn = "ms-main-source-db";
$dbc = mysqli_connect($dbh , $dbu , $dbp , $dbn);
$PDO = new PDO("mysql:host=$dbh;dbname=$dbn" , $dbu , $dbp);
if (!$dbc) {
  echo "Database connection error!<br>Please try later...";
}
?>
