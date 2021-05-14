<?php
  require 'connect.php';
  $vendorid= $_GET["id"];
  $sql= "DELETE FROM vendor WHERE vendorid=$vendorid";

  $retval = mysqli_query( $link, $sql); 
    if(! $retval ){
      header("Location: template.php?pageName=manageVendors&success=false&message=An error occurred, try again!"); 
      exit;
    }
    else {
      header("Location: template.php?pageName=manageVendors&success=true&message=Vendor $vendorid Deleted!"); 
      exit;
    }
  mysqli_close($link); 
?>