<!DOCTYPE HTML>
<html lang="en">
  <div id="content">
    <div class="form">
      <h3>Add Vendor</h3>

      <div class="manageForm">
        <form method="post" action="processAddVendor.php">

          <label>First Name:</label>
          <input type="text" name="firstname" required="required" maxlength=20><br>
          
          <label> Surname:</label>
          <input type="text" name="surname" required="required" maxlength=20><br>
          
          <label> Address:</label>
          <input type="text" name="address1" required="required" maxlength=50><br>
          
          <label> Town:</label>
          <input type="text" name="town" required="required" maxlength=20><br>
          
          <label> County:</label>
          <input type="text" name="county" required="required" maxlength=20><br>
          
          <label> Mobile:</label>
          <input type="text" name="mobile" required="required" maxlength=20><br>
          
          <label >Email:</label>
          <input type="email" name="email" required="required" maxlength=100><br>
          
          <input type="submit" id="updateButton" name="addVendor" value="Add Vendor" required="required">
        </form>
      </div>
    </div>
    <p>
      <button onclick="goBack()">Go Back</button>
    </p>
  </div>
</html>