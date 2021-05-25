<!DOCTYPE HTML>
<html lang="en">
  <div id="content">
    <h2>Manage Properties</h2>
    <p>
      <button><a href='template.php?pageName=addProperty'>Add a New Property</a></button>
    </p>
    <?php
      require 'connect.php';
      $sql="SELECT p.*, v.firstname, v.surname, c.categoryname from property p LEFT JOIN category c ON c.categoryId = p.categoryId LEFT JOIN vendor v ON v.vendorid = p.vendorid
      ORDER BY p.propertyid ASC";
      $result=mysqli_query($link, $sql); 

      if (isset($_GET["propertyAdded"])) {
        $propertyAdded = $_GET["propertyAdded"];
        if ($propertyAdded == "true") {
          echo "<h3>Property Added!</h3>";
        }
      }
    ?>

    <div class="table">
      <?php
        if(mysqli_num_rows($result)>0){
          echo "<table class=\"dataTable\">";
          echo "<tr>
          <th width=\"10%\">Property Id</th>
          <th>Data</th>
          <th width=\"10%\">Update</th>
          <th width=\"10%\">Delete</th>
          </tr>";

          while($row=mysqli_fetch_array($result)){
            $propertyid=$row["propertyid"];
            $image=$row["image"];
            $shortdescription=$row["shortdescription"];
            $longdescription=$row["longdescription"];
            $address1=$row["address1"];
            $town=$row["town"];
            $county=$row["county"];
            $price=$row["price"];
            $category=$row["categoryname"];
            $vendorSurname=$row["surname"];
            $vendorFirstname=$row["firstname"];

            setlocale(LC_MONETARY, 'nl_NL.UTF-8');
            $displayPrice = number_format($price, 2, '.', ',');
            
            echo "<tr>
            <td>$propertyid</td>
            <td>
              <strong>Image: </strong>$image <br/><p>
              <strong>Short Description: </strong>$shortdescription <br/><p>
              <strong>Long Description: </strong>$longdescription <br/><p>
              <strong>Address: </strong>$address1 <br/><p>
              <strong>Town: </strong>$town<br/><p>
              <strong>County: </strong>$county<br/></p>
              <strong>Price: </strong> € $displayPrice</p>
              <strong>Category: </strong>$category<br/><p>
              <strong>Vendor: </strong>$vendorFirstname $vendorSurname<br/><p>
            </td>
            <td> <button><a href='template.php?pageName=editProperty&id=$propertyid'>Edit</a></button></td>
            <td> <button><a href='template.php?pageName=deleteProperty&id=$propertyid'>Delete</a></button></td>
            </tr>";
          }
          echo "</table>";
        } else {
          echo("there are currently no Properties in the database");
        }
      mysqli_close($link);
      ?>
    </div>
    <p>
      <button onclick="goBack('template.php?pageName=adminLoggedIn')">Go Back</button>
    </p>
  </div>
</html>