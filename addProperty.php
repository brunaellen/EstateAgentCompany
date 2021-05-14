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

          <label>Category Id:</label>
          <input type="number" name="categoryid" required="required"><br>

          <label>Vendor Id:</label>
          <input type="number" name="vendorid" required="required"><br>
          
          <input type="submit" id="updateButton" name="addProperty" value="Add Property" required="required">
        </form>
      </div>
    </div>
    <p>
      <button onclick="goBack()">Go Back</button>
    </p>
  </div>
</html>