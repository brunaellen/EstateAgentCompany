<!DOCTYPE HTML>
<html lang="en">
  <div id="content">
    <div class="table">
      <?php
        require 'connect.php';
        $vendorid=$_GET['id'];
        $sql="SELECT * from vendor where vendorid=$vendorid";
        $result=mysqli_query($link, $sql);
        echo "<h2>Delete Vendor</h2>";
        echo "<p>"; 
        echo "<table>";
        echo "<tr>
        <th>Id</th>
        <th>Firstname</th>
        <th>Surname</th>
        <th>Address</th>
        <th>Town</th>
        <th>County</th>
        <th>Mobile</th>
        <th>Email</th>
        </tr>";

        $row=mysqli_fetch_array($result); 
        $vendorid=$row["vendorid"];
        $firstname=$row["firstname"];
        $surname=$row["surname"]; 
        $address=$row["address1"];
        $town=$row["town"];
        $county=$row["county"];
        $mobile=$row["mobile"];
        $email=$row["email"];

        echo "<tr>
        <td>$vendorid</td>
        <td>$firstname</td>
        <td>$surname</td>
        <td>$address</td>
        <td>$town</td>
        <td>$county</td>
        <td>$mobile</td>
        <td>$email</td>
        </tr>";
        echo "</table><p>";
        echo "<h3>Are you sure you want to delete? </h3>
        <button><a href='processDeleteVendor.php?id=$vendorid'>Delete</a></button> 
        <button onclick=\"goBack('template.php?pageName=manageVendors')\">Cancel</button>";
        mysqli_close($link); 
      ?>
    </div>
  </div>
</html>