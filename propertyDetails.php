<!DOCTYPE HTML>
<html lang="en">
  <div id="content">
    <div id="displayProperties">
      <?php
        require 'connect.php';
        $propertyid= $_GET["propertyid"];
        $sql= "SELECT * FROM property WHERE propertyid=$propertyid";
        $result=mysqli_query($link, $sql);
        $row=mysqli_fetch_array($result);

        $propertyid=$row["propertyid"];
        $image=$row["image"];
        $longdescription=$row["longdescription"];
        $address1=$row["address1"];
        $price=$row["price"]; 
        $vendorid=$row["vendorid"];
      ?>
      <?php
        $sql2= "SELECT * FROM vendor WHERE vendorid=$vendorid";
        $result2=mysqli_query($link, $sql2);
        $row2=mysqli_fetch_array($result2);

        $firstname=$row2["firstname"];
        $surname=$row2["surname"];
        $mobile=$row2["mobile"];
        $email=$row2["email"];
      ?>

      <?php echo "<img src='$image' width=200 height=200' border=3px> <h3>";?>
      <?php
        echo "<h3>Address:</h3>";
        echo "$address1"; 
        echo "</p>";
        echo "<h3>Description:</h3>"; 
        echo "$longdescription";
        echo "</p>";

        setlocale(LC_MONETARY, 'nl_NL.UTF-8');
        $displayPrice = number_format($price, 2, ',', '.');
        echo "<strong>Price: </strong> € $displayPrice"; 
        echo "</p>";
        echo "<h3>Vendor's Details:</h3>"; 
        echo "Name: "; 
        echo "$firstname "; 
        echo "$surname"; 
        echo "</p>";
        echo "Telephone: "; 
        echo "<div id=vendorContact>";
        echo "<a href=\"tel:$mobile\">$mobile</a><p>"; 
        echo "</p>";
        echo "email: "; 
        echo "<a href = \"mailto:$email\">$email</a>"; 
        echo "</div>";
        echo "</p>";
        mysqli_close($link);
      ?>
      <p>
      <button onclick="goBack()">Go Back</button>
      </p>
      <script src="includes/scripts.js"></script>
    </div><!--close displayProperties div-->
  </div><!--close content div-->
</html>