<html>
<?php include("../assets/php/dbconfndzjg.php"); ?>
<head>
<?php include("../assets/php/header.php"); ?>
</head>
<body>
<?php
$uname = $_COOKIE['uname'];
$quid = $PDO->query("SELECT * FROM `users` WHERE `uname` = '$uname'");
$data = $quid->fetch(PDO::FETCH_ASSOC);
$quexe = $PDO->query("SELECT * FROM `posts` WHERE `sender` = '" . $data['id'] . "'");
foreach ($quexe as $row) {
    if ($row['type'] = "pic") {
        $comments = explode("," , $row['comm']);
        if ($row['likes']) {
            $likes = explode("," , $row['likes']);
        }else {
            $likes = [];
            $likesst = "0";
        }
        if (in_array($data['id'] , $likes)) {
            $likest = "like";
        }else {
            $likest = "dislike";
        }
        if ($likesst = "0") {
            $likesCount = 0;
        }else {
            $likesCount = count($likes);
        }
        echo "<div class='post'><div class='sender'><div class='sender-val'><img class='profile-img' src='" . $data['profile'] . "'/><p class='sender-uname'>" . $data['uname'] . "</p></div></div><div class='val'><img src='" . $row['val'] . "'/></div>";
        echo "<div class='btn'><div class='likes center'><button class='like'><img src='../assets/img/" . $likest . ".png'/></button><br><center><p class='counter'>" . $likesCount . "</p></center></div></div>";
        echo "<div class='comm'>";
        foreach ($comments as $comm) {
            $khar = explode(":" , $comm);
            $sender_id = $khar[0];
            $sender_res = $PDO->query("SELECT `uname` FROM `users` WHERE id = '" . $sender_id . "'");
            $sender = $sender_res->fetch(PDO::FETCH_ASSOC);
            $val = $khar[1];
            echo '<a target="_blank" href="' . $server . '?u=' . $sender["uname"] . '">@' . $sender['uname'] . "</a>:";
            echo "<br>";
            echo $val;
            echo "<br>";
        }
        echo "</div></div>";
    }
}
?>
</body>
<script>
<?php $i = 0; ?>
function sendComment(sender_id , text_input_id) {
    let inputValue = document.querySelector("#comm-input-" + text_input_id).value;
    fetch("../api/sendComment/?sid=" + sender_id + "&val=" + text_input_id)
    .then(response => response.json())
    .then(data => window.comm[<?php echo $i ?>] = data);
    sendCommentState(window.comm[<?php echo $i ?>] , text_input_id , sender_id);
}
function sendCommentState(res , id , sender){
    if (res.state = true){
        document.querySelector("#comm-input-" + id).value = "";
    }
}
</script>
</html>