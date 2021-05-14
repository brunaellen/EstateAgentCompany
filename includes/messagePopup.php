<?php
if(isset($_GET["success"]) && isset($_GET["message"])){
  $success = $_GET["success"];
  if ($success == "false") {
    $messageType = "error";
  } else {
    $messageType = "success";
  }
  $message = $_GET["message"];
  echo "<script>showMessage('$messageType','$message')</script>";
}
?>