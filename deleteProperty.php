<!DOCTYPE HTML>
<html lang="en">
  <div id="content">
    <div class="table">
      <?php
        require 'connect.php';
        $propertyid=$_GET['id'];
        $sql="SELECT * from property where propertyid=$propertyid";
        $result=mysqli_query($link, $sql);
        echo "<h2>Delete Property</h2>";
        echo "<p>"; 
        echo "<table>";
        echo "<tr>
        <th>Property Id</th>
        <th>Address</th>
        <th>Town</th>
        <th>County</th>
        <th>Price</th>
        <th>Category Id</th>
        <th>Vendor Id</th>
        </tr>";

        $row=mysqli_fetch_array($result); 
        $propertyid=$row["propertyid"];
        $address1=$row["address1"];
        $town=$row["town"];
        $county=$row["county"];
        $price=$row["price"];
        $categoryid=$row["categoryid"];
        $vendorid=$row["vendorid"];

        echo "<tr>
        <td>$propertyid</td>
        <td>$address1</td>
        <td>$town</td>
        <td>$county</td>
        <td>$price</td>
        <td>$categoryid</td>
        <td>$vendorid</td>
        </tr>";
        echo "</table><p>";
        echo "<h3>Are you sure you want to delete? </h3>
        <button><a href='processDeleteProperty.php?id=$propertyid'>Delete</a></button> 
        <button onclick=\"goBack('template.php?pageName=manageProperties')\">Cancel</button>";

        
        mysqli_close($link); 
      ?>
    </div>
  </div>
</html>