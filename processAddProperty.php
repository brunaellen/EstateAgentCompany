<!DOCTYPE HTML>
<html lang="en">
  <div id="content">
    <?php
      require 'connect.php';
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

      $sql_insert="INSERT INTO property (address1, town, county, price, bedrooms, shortdescription, 
      longdescription, image, categoryid, vendorid) VALUES ('$address1', '$town', '$county', 
      $price, $bedrooms, '$shortdescription', '$longdescription', '$image',
      $categoryid, $vendorid);";
      
      if(mysqli_query($link, $sql_insert)) {
        header("Location:template.php?pageName=manageProperties&propertyAdded=true");
        exit;
      } else {
        echo "An error occured, try again! ";
      } 
      mysqli_close($link);
    ?>
  </div>
</html>