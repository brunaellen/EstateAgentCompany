<!DOCTYPE HTML>
<html lang="en">
  <div id="content">
    <div class="form">
      <h3>Edit Property</h3>
      
      <?php
        require 'connect.php';
        $propertyid=$_GET["id"];
        $sql="SELECT * FROM property WHERE propertyid=$propertyid"; 
        $result=mysqli_query($link, $sql); 
        $row=mysqli_fetch_array($result);
        $propertyid=$row["propertyid"];
        $address1=$row["address1"];
        $town=$row["town"];
        $county=$row["county"];
        $price=$row["price"];
        $bedrooms=$row["bedrooms"];
        $shortdescription=$row["shortdescription"];
        $longdescription=$row["longdescription"];
        $image=$row["image"]; 
        $categoryid=$row["categoryid"];
        $vendorid=$row["vendorid"];
        mysqli_close($link);
      ?>

      <div class="managePropertyForm">
        <form method="post" action="processEditProperty.php">
          <label>Property Id:</label>
          <input type="number" name="propertyid" value="<?php echo $propertyid; ?>" readonly><br>

          <label>Address:</label>
          <input type="text" name="address1" value="<?php echo $address1; ?>" required="required"><br>
          
          <label> Town:</label>
          <input type="text" name="town" value="<?php echo $town; ?>" required="required"><br>
          
          <label> County:</label>
          <input type="text" name="county" value="<?php echo $county; ?>" required="required"><br>

          <label> Price:</label>
          <input type="number" name="price" value="<?php echo $price; ?>" required="required"><br>
          
          <label> bedrooms:</label>
          <input type="number" name="bedrooms" value="<?php echo $bedrooms; ?>" required="required"><br>
          
          <label style="padding-bottom: 85px;"> Short Description:</label>
          <textarea name="shortdescription" rows="8" cols="30" required="required"><?php echo $shortdescription; ?></textarea><br>

          <label style="padding-bottom: 85px;"> Long Description:</label>
          <textarea name="longdescription" rows="8" cols="30" required="required"><?php echo $longdescription; ?></textarea><br>
          
          <label> Image:</label>
          <input type="text" name="image" value="<?php echo $image; ?>" required="required"><br>
          
          <label>Category:</label>
          <select id="category" name="categoryid" required="required">
            <option value="1" <?php if ($categoryid == 1) echo "selected=\"true\"" ?>>Residential</option>
            <option value="2" <?php if ($categoryid == 2) echo "selected=\"true\"" ?>>Commercial</option>
            <option value="3" <?php if ($categoryid == 3) echo "selected=\"true\"" ?>>Sites</option>
          </select><br>

          <label>Vendor:</label>
          <select id="vendor" name="vendorid" required="required">
          <?php
            require 'connect.php';
            $sql="SELECT * from vendor ORDER BY firstname";
            $result=mysqli_query($link, $sql); 
            while($row=mysqli_fetch_array($result)){
              $dbVendorId = $row["vendorid"];
              $dbVendorFirstName = $row["firstname"];
              $dbVendorSurname = $row["surname"];
              if($vendorid == $dbVendorId){
                echo "<option value=\"$dbVendorId\" selected=\"true\">$dbVendorFirstName $dbVendorSurname</option>";
              } else {
                echo "<option value=\"$dbVendorId\">$dbVendorFirstName $dbVendorSurname</option>";
              }
            }
          ?>
          </select> <br>
          
          <input type="submit" id="updateButton" name="updateButton" value="Update" required="required">
        </form>
      </div>
    </div>
    <p>
      <button onclick="goBack('template.php?pageName=manageProperties')">Go Back</button>
    </p>
  </div>
</html>