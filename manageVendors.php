<!DOCTYPE HTML>
<html lang="en">
  <div id="content">
    <h2>Manage Vendors</h2>
    <p>
      <button><a href='template.php?pageName=addVendor'>Add a New vendor</a></button>
    </p>
    <?php
      require 'connect.php';
      $sql="SELECT * from vendor ORDER BY vendorid ASC;";
      $result=mysqli_query($link, $sql); 

      if (isset($_GET["vendorAdded"])) {
        $vendorAdded = $_GET["vendorAdded"];
        if ($vendorAdded == "true") {
          echo "<h3>Vendor Added!</h3>";
        }
      }
    ?>

    <div class="table">
      <?php
        if(mysqli_num_rows($result)>0){
          echo "<table class=\"dataTable\">";
          echo "<tr>
          <th width=\"10%\">Id</th>
          <th>Data</th>
          <th width=\"10%\">Update</th>
          <th width=\"10%\">Delete</th>
          </tr>";

          while($row=mysqli_fetch_array($result)){
            $id=$row["vendorid"];
            $firstname=$row["firstname"];
            $surname=$row["surname"]; 
            $address=$row["address1"];
            $town=$row["town"];
            $county=$row["county"];
            $mobile=$row["mobile"];
            $email=$row["email"];
            echo "<tr>
            <td>$id</td>
            <td><strong>First name: </strong>$firstname <br />
            <strong>Surname: </strong>$surname<br />
            <strong>Address: </strong>$address<br />
            <strong>Town: </strong>$town<br />
            <strong>County: </strong>$county<br />
            <strong>Mobile: </strong>$mobile<br />
            <strong>E-mail: </strong>$email<br />
            <td> <button><a href='template.php?pageName=editVendor&id=$id'>Edit</a></button></td>
            <td> <button><a href='template.php?pageName=deleteVendor&id=$id'>Delete</a></button></td>
            </tr>";
          }
          echo "</table>";
        } else {
          echo("there are currently no Vendors in the database");
        }
      mysqli_close($link);
      ?>
    </div>
    <p>
      <button onclick="goBack('template.php?pageName=adminLoggedIn')">Go Back</button>
    </p>
    <script src="includes/scripts.js"></script>
  </div>
</html>