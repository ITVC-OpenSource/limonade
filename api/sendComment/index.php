<?php
if (isset($_GET['sid']) AND isset($_GET['val']) AND isset($_GET['post'])) {
  
}else {
  $response['val'] = false;
}
$j_res = json_encode($response);
echo $j_res;
?>
