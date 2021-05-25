
<?php
  require 'connect.php';
  $surname=$_POST['surname']; 
  $firstname=$_POST['firstname']; 
  $address1=$_POST["address1"];
  $town=$_POST["town"]; 
  $county=$_POST["county"]; 
  $mobile=$_POST["mobile"]; 
  $email=$_POST["email"];
  $sql_insert="INSERT INTO vendor(surname, firstname, address1, town, county, mobile, email) VALUES ('$surname', '$firstname', '$address1', '$town', '$county', '$mobile', '$email');";

  if(mysqli_query($link, $sql_insert)) {
    header("Location: template.php?pageName=manageVendors&success=true&message=Vendor Added!"); 
      exit;
  } else {
    header("Location: template.php?pageName=manageVendors&success=false&message=An error occurred, try again!"); 
    exit;
  } 
  mysqli_close($link);
?>
