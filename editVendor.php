<!DOCTYPE HTML>
<html lang="en">
  <div id="content">
    <div class="form">
      <h3>Edit Vendor</h3>
      
      <?php
        require 'connect.php';
        $vendorid=$_GET["id"];
        $sql="SELECT * FROM vendor WHERE vendorid=$vendorid"; 
        $result=mysqli_query($link, $sql); 
        $row=mysqli_fetch_array($result);
        $vendorid=$row["vendorid"]; 
        $surname=$row["surname"];
        $firstname=$row["firstname"];
        $address1=$row["address1"];
        $town=$row["town"];
        $county=$row["county"];
        $mobile=$row["mobile"];
        $email=$row["email"];
        mysqli_close($link);
      ?>
      <div class="manageForm">
        <form method="post" action="processEditVendor.php">
          <label>Vendor Id:</label>
          <input type="text" name="vendorid" value="<?php echo $vendorid; ?>" readonly><br>

          <label>First Name:</label>
          <input type="text" name="firstname" value="<?php echo $firstname; ?>" required="required"><br>
          
          <label> Surname:</label>
          <input type="text" name="surname" value="<?php echo $surname; ?>" required="required"><br>
          
          <label> Address:</label>
          <input type="text" name="address1" value="<?php echo $address1; ?>" required="required"><br>
          
          <label> Town:</label>
          <input type="text" name="town" value="<?php echo $town; ?>" required="required"><br>
          
          <label> County:</label>
          <input type="text" name="county" value="<?php echo $county; ?>" required="required"><br>
          
          <label> Mobile:</label>
          <input type="text" name="mobile" value="<?php echo $mobile; ?>" required="required"><br>
          
          <label >Email:</label>
          <input type="email" name="email" value="<?php echo $email; ?>" required="required"><br>
          
          <input type="submit" id="updateButton" name="updateButton" value="Update" required="required">
        </form>
      </div>
    </div>
    <p>
      <button onclick="goBack('template.php?pageName=manageVendors')">Go Back</button>
    </p>
  </div>
</html>