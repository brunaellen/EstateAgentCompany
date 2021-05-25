<?php
  session_start();
  require 'connect.php';

  if (isset($_POST['admin_name']) and isset($_POST['password'])){
    $username = $_POST['admin_name'];
    $password = $_POST['password'];
    $query = "SELECT * FROM administrator WHERE adminname='$username' AND password='$password'";
    $result = mysqli_query($link, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);
    if ($count == 1){
      $_SESSION['username'] = $username;
      header("Location:template.php?pageName=adminLoggedIn");
      exit;
    }
    else{
      $_SESSION['errors'] = array('<script> alert ("Your username or password was incorrect")</script>');
      header("Location:template.php?pageName=adminLogin");
    }
  }
?>