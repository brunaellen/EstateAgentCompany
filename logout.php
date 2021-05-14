<?php
  session_start();
  unset($_SESSION['username']);
  session_destroy();
  header("Location:template.php?pageName=adminLogin");
  exit;
?>