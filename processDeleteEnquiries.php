<?php
  require 'connect.php';
  $id= $_GET["id"];
  $sql= "DELETE FROM enquiry WHERE id=$id";

  $retval = mysqli_query($link, $sql);
  if(! $retval ){
    header("Location: template.php?pageName=manageVendors&success=false&message=An error occurred, try again!"); 
    exit;
  } else {
    header("Location: template.php?pageName=viewEnquiries&success=true&message=Enquiry $id is now deleted!");
    exit; 
  }
  mysqli_close($link);
?>