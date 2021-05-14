<?php
  require 'connect.php'; 
  $vendorid=$_POST['vendorid']; 
  $surname=$_POST['surname']; 
  $firstname=$_POST['firstname']; 
  $address1=$_POST["address1"];
  $town=$_POST["town"]; 
  $county=$_POST["county"]; 
  $mobile=$_POST["mobile"]; 
  $email=$_POST["email"];
  $sql= "UPDATE vendor SET surname='$surname', firstname='$firstname', 
  address1='$address1', town='$town', county='$county', mobile='$mobile', 
  email='$email' WHERE vendorid=$vendorid";

  $retval = mysqli_query( $link, $sql); 
    if(! $retval ){
      header("Location: template.php?pageName=manageVendors&success=false&message=An error occurred, try again!"); 
      exit;
    }
    else {
      header("Location: template.php?pageName=manageVendors&success=true&message=Vendor $vendorid Updated!"); 
      exit;
    }
  mysqli_close($link);
?>
