<?php
if (!isset($_COOKIE['lang'])) {
    $_COOKIE['lang'] = "farsi";
}elseif (isset($_POST['lang'])) {
    $_COOKIE['lang'] = $_POST['lang'];
}
?>