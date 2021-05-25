<!DOCTYPE HTML>
<html lang="en">
  <div id="content">
    <div class="form">
      <h3>Add Property</h3>

      <div class="managePropertyForm">
        <form method="post" action="template.php?pageName=processAddProperty">
          
          <label> Address:</label>
          <input type="text" name="address1" required="required" maxlength=50><br>
          
          <label> Town:</label>
          <input type="text" name="town" required="required" maxlength=50><br>
          
          <label> County:</label>
          <input type="text" name="county" required="required" maxlength=50><br>

          <label>Price:</label>
          <input type="number" name="price" required="required"><br>
          
          <label> Bedrooms:</label>
          <input type="number" name="bedrooms" required="required"><br>
          
          <label > Short Description:</label>
          <textarea type="text" name="shortdescription" required="required"></textarea><br>

          <label> Long Description:</label>
          <textarea type="text" name="longdescription" required="required"></textarea><br>
          
          <label >Image:</label>
          <input type="text" name="image" required="required"><br>

          <label for="category">Category:</label>
          <select id="category" name="categoryid" required="required">
            <option value="1">Residential</option>
            <option value="2">Commercial</option>
            <option value="3">Sites</option>
          </select><br>

          <label>Vendor:</label>
          <select id="vendor" name="vendorid" required="required">
            <?php
              require 'connect.php';
              $sql="SELECT * from vendor ORDER BY firstname";
              $result=mysqli_query($link, $sql); 
              while($row=mysqli_fetch_array($result)){
                $vendorid = $row["vendorid"];
                $vendorFirstName = $row["firstname"];
                $vendorSurname = $row["surname"];
                echo "<option value=\"$vendorid\">$vendorFirstName $vendorSurname</option>";
              }
            ?>
          </select><br>
          <input type="submit" id="updateButton" name="addProperty" value="Add Property" required="required">
        </form>
      </div>
    </div>
    <p>
      <button onclick="goBack()">Go Back</button>
    </p>
  </div>
</html>