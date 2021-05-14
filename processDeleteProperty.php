<?php
  require 'connect.php';
  $propertyid= $_GET["id"];
  $sql= "DELETE FROM property WHERE propertyid=$propertyid";

  $retval = mysqli_query( $link, $sql); 
    if(! $retval ){
      header("Location: template.php?pageName=manageProperties&success=false&message=An error occurred, try again!");
      exit;
    }
    else {
      header("Location: template.php?pageName=manageProperties&success=true&message=Property $propertyid Deleted!");
      exit;
    }
  mysqli_close($link); 
?>