<?php
session_start();
include(__DIR__ . "\dbconfndzjg.php");
echo '
    <link rel="manifest" href="/manifest.json">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیموناد</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/style.min.css">
    <script src="/assets/js/jamy.js"></script>
    <script src="/assets/js/jquery.min.js"></script>';
    // try {
    //     $ghres = file_get_contents("https://github.com/amy-soft/Jamy/raw/core/Jamy.js");
    //     $f = fopen(__DIR__ . "\..\js\jamy.js" , "w");
    //     $fw = fwrite($f , $ghres);
    // } catch (err $err) {
    //     //throw $th;
    // }
    // if (isset($_COOKIE['uname']) AND isset($_COOKIE['passw'])) {
    //     $res = $PDO->query("SELECT * FROM `users` WHERE `uname` = '" . $_COOKIE['uname'] . "' AND `passw` = '" . $_COOKIE['passw'] . "'");
    //     if ($res->rowCount() == 1) {
    //         $_SESSION['login'] = true;
    //     }else{
    //         $_SESSION['login'] = false;
    //     }
    // }
    // if ($_SESSION['login'] = false) {
    //     echo "<script>joloc('assign' , '/login/');</script>";
    // }
?>
<script>
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
var uname = localStorage.getItem("uname");
var passw = localStorage.getItem("passw");
if (uname !==null !==undefined !=="") {
    if (passw !==null !==undefined !=="") {
        setCookie("uname" , uname , 1000);
        setCookie("passw" , passw , 1000);
    }else{
        joloc("assign" , "/login/");
    }
}
navigator.serviceWorker.register("/assets/js/sw.js");
let deferredPrompt = window.deferredPrompt = undefined;
const addBtn = document.querySelector('#A2HS');
window.addEventListener('beforeinstallprompt', (e) => {
  // Prevent Chrome 67 and earlier from automatically showing the prompt
  e.preventDefault();
  // Stash the event so it can be triggered later.
  window.deferredPrompt = e;
  // Update UI to notify the user they can add to home screen
  addBtn.style.display = 'block';

  addBtn.addEventListener('click', (e) => {
    // hide our user interface that shows our A2HS button
    addBtn.style.display = 'none';
    // Show the prompt
    window.deferredPrompt.prompt();
    // Wait for the user to respond to the prompt
    window.deferredPrompt.userChoice.then((choiceResult) => {
        if (choiceResult.outcome === 'accepted') {
          console.log('User accepted the A2HS prompt');
        } else {
          console.log('User dismissed the A2HS prompt');
        }
        window.deferredPrompt = null;
      });
  });
});
window.addEventListener('appinstalled', () => {
  // Hide the app-provided install promotion
  hideInstallPromotion();
  // Clear the deferredPrompt so it can be garbage collected
  deferredPrompt = null;
  // Optionally, send analytics event to indicate successful install
  console.log('PWA was installed');
});
</script>
<button id="A2HS" class="add-button" >Add to home screen</button>
