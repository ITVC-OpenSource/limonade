<!DOCTYPE html>
<html>
<head>
<style>
a:focus{
  outline: 0;
}

.navbar {
  overflow: hidden;
  background-color: var(--dark-color);
  bottom: 0;
  width: 100%;
  border-top: 1px solid #fff;
  display: block;
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
  height: 55px;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 0;
  text-decoration: none;
  font-size: 17px;
  width: 20%;
  margin: 0;
}

.navbar a img{
  padding: 5px;
  border-radius: 10px;
}

.navbar a.active img{
  background-color: rgba(255,255,255,0.5);
}

iframe{
  position: absolute;
  top: 0;
  left: 50%;
  width: 100%;
  height: calc(100% - 61px);
  border: none;
  transform: translateX(-50%);
  border-top-right-radius: 10px;
  border-top-left-radius: 10px;
  z-index: -1;
}
img{
  width: 35px;
  height: 35px;
  margin-top: 5px;
}
#home_if{
  background: url("assets/img/loaderl.svg") center center no-repeat;
}
#search_if{
  background: url("assets/img/loaderl.svg") center center no-repeat;
}
#add_if{
  background: url("assets/img/loaderl.svg") center center no-repeat;
}
#activity_if{
  background: url("assets/img/loaderl.svg") center center no-repeat;
}
#profile_if{
  background: url("assets/img/loaderl.svg") center center no-repeat;
}
</style>
<?php
  include('assets/php/header.php');
  include('assets/php/functions.php');
?>
</head>
<body>
<?php if (!isset($_GET['u'])) { ?>
<div class="main">
  <div class="navbar">
    <a id="home" class="active"><img src="assets/img/Home.png" /></a>
    <a id="search"><img src="assets/img/search.png" /></a>
    <a id="add"><img src="assets/img/add.png" /></a>
    <a id="activity"><img src="assets/img/activity.png" /></a>
    <a id="profile"><img src="assets/img/profile.png" /></a>
  </div>
  <iframe id="home_if" src="home/" class=""></iframe>
  <iframe id="search_if" src="explore/" class="hided"></iframe>
  <iframe id="add_if" src="add/" class="hided"></iframe>
  <iframe id="activity_if" src="activity/" class="hided"></iframe>
  <iframe id="profile_if" src="profile/" class="hided"></iframe>
</div>
<?php }else{ ?>
<?php
if ($_GET['u'] == "" or $_GET['u'] == " " or $_GET['u'] == null or $_GET['u'] == "  ") {
  $res = get_null_user_details();
  echo $res;
}else {
  $res = get_user_details($_GET['u']);
  echo $res;
}
?>
<?php } ?>
<div class="splash" id="splash">
  <div id="splash-container" class="splash-container"><img src="/assets/img/loader.svg"></div>
</div>
</body>
<script>
window.onload = () => {
  $(".splash").fadeOut(500);
}
function active(a , inaon , inatw , inath , inafo) {
  document.querySelector(a).className = "active";
  document.querySelector(a + "_if").className = "showed";
  document.querySelector(inaon + "_if").className = "hided";
  document.querySelector(inatw + "_if").className = "hided";
  document.querySelector(inath + "_if").className = "hided";
  document.querySelector(inafo + "_if").className = "hided";
  document.querySelector(inaon).className = "";
  document.querySelector(inatw).className = "";
  document.querySelector(inath).className = "";
  document.querySelector(inafo).className = "";
}
document.querySelector("#home").addEventListener("click" , () => {
  active("#home" , "#search" , "#add" , "#activity" , "#profile");
});
document.querySelector("#activity").addEventListener("click" , () => {
  active("#activity" , "#home" , "#search" , "#add" , "#profile");
});
document.querySelector("#search").addEventListener("click" , () => {
  active("#search" , "#activity" , "#home" , "#add" , "#profile");
});
document.querySelector("#profile").addEventListener("click" , () => {
  active("#profile" , "#search" , "#activity" , "#home" , "#add");
});
document.querySelector("#add").addEventListener("click" , () => {
  active("#add" , "#profile" , "#search" , "#activity" , "#home");
});
function checkInternet() {
  if (navigator.onLine === "true") {
    body.disabled = "false";
  } else {
    window.alert("لطفاً اتصال خود به اینترنت را بررسی کنید.")
    .then(checkInternet());
    body.disabled = "true";
  }
}
window.onoffline = () => {
  window.alert("لطفاً اتصال خود به اینترنت را بررسی کنید.")
  .then(checkInternet());
}
document.querySelector("#home_if").onload = () => {document.querySelector("#home_if").style.background = "none!important";};
document.querySelector("#search_if").onload = () => {document.querySelector("#search_if").style.background = "none!important";};
document.querySelector("#add_if").onload = () => {document.querySelector("#add_if").style.background = "none!important";};
document.querySelector("#activity_if").onload = () => {document.querySelector("#activity_if").style.background = "none!important";};
document.querySelector("#profile_if").onload = () => {document.querySelector("#profile_if").style.background = "none!important";};
</script>
</html>
