<?php
  require 'connect.php'; 
  $propertyid=$_POST["propertyid"];
  $address1=$_POST["address1"];
  $town=$_POST["town"];
  $county=$_POST["county"];
  $price=$_POST["price"];
  $bedrooms=$_POST["bedrooms"];
  $shortdescription=$_POST["shortdescription"];
  $longdescription=$_POST["longdescription"];
  $image=$_POST["image"]; 
  $categoryid=$_POST["categoryid"];
  $vendorid=$_POST["vendorid"];

  $sql= "UPDATE property SET address1='$address1', town='$town', county='$county', 
  price=$price, bedrooms='$bedrooms', shortdescription='$shortdescription', 
  longdescription='$longdescription', image='$image', categoryid=$categoryid, 
  vendorid=$vendorid WHERE propertyid=$propertyid";

  $retval = mysqli_query( $link, $sql); 
    if(! $retval ){
      header("Location: template.php?pageName=manageProperties&success=false&message=An error occurred, try again!");
      exit;
    } else {
      header("Location: template.php?pageName=manageProperties&success=true&message=Property $propertyid Updated!"); 
      exit;
    }
  mysqli_close($link);
?>
