<?php
  require 'connect.php';
  $id= $_GET["id"];

  $sql= "SELECT status FROM testimonial WHERE id=$id AND status = 'approved'";
  $result=mysqli_query($link, $sql);

  if(mysqli_num_rows($result)>0){
    header("Location: template.php?pageName=manageTestimonials&success=false&message=Testimonial is already approved.");
    exit;
  }

  $sql= "UPDATE testimonial SET status='approved' WHERE id=$id";
  $retval = mysqli_query( $link, $sql);

  if(! $retval ) {
    die('Could not update data: ' . mysql_error());
  } else {
    header("Location: template.php?pageName=manageTestimonials&success=true&message=Testimonial is now approved");
    exit;
  }
  mysqli_close($link);
?>