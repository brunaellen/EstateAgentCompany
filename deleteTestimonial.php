<?php
  require 'connect.php';
  $id= $_GET["id"];
  $sql= "DELETE FROM testimonial WHERE id=$id";

  $retval = mysqli_query($link, $sql);
  if(! $retval ){
    die('Could not delete data: ' . mysql_error());
  } else {
    header("Location: template.php?pageName=manageTestimonials&success=true&message=Testimonial is now deleted!");
    exit; 
  }
  mysqli_close($link);
?>