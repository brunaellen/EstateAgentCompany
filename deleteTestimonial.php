<?php
  require 'connect.php';
  $id= $_GET["id"];
  $sql= "DELETE FROM testimonial WHERE id=$id";

  $retval = mysqli_query($link, $sql);
  if(! $retval ){
    header("Location: template.php?pageName=manageVendors&success=false&message=An error occurred, try again!"); 
    exit;
  } else {
    header("Location: template.php?pageName=manageTestimonials&success=true&message=Testimonial $id is now deleted!");
    exit; 
  }
  mysqli_close($link);
?>