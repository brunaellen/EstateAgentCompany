<!DOCTYPE HTML>
<html lang="en">
  <div id="content">
    <?php
      require 'connect.php';
      $address1=mysqli_real_escape_string($link, $_POST["address1"]);
      $town=mysqli_real_escape_string($link, $_POST["town"]);
      $county=mysqli_real_escape_string($link, $_POST["county"]);
      $price=$_POST["price"];
      $bedrooms=$_POST["bedrooms"];
      $shortdescription=mysqli_real_escape_string($link, $_POST["shortdescription"]);
      $longdescription=mysqli_real_escape_string($link, $_POST["longdescription"]);
      $image=$_POST["image"]; 
      $categoryid=$_POST["categoryid"];
      $vendorid=$_POST["vendorid"];

      $sql_insert="INSERT INTO property (address1, town, county, price, bedrooms, shortdescription, 
      longdescription, image, categoryid, vendorid) VALUES ('$address1', '$town', '$county', 
      $price, $bedrooms, '$shortdescription', '$longdescription', '$image',
      $categoryid, $vendorid);";
      
      if(mysqli_query($link, $sql_insert)) {
        header("Location: template.php?pageName=manageProperties&success=true&message=Property $propertyid Added!"); 
        exit;
      } else {
        header("Location: template.php?pageName=manageProperties&success=false&message=An error occurred, try again!");
        exit;
      } 
      mysqli_close($link);
    ?>
  </div>
</html>