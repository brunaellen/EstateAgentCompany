<!DOCTYPE HTML>
<html lang="en">
  <div id="content">
    
    <h2>Contact Us</h2>
    <div id="companyLocationImg">
      <a href="https://www.google.com/maps/@54.2712546,-8.5058037,15z"><img src="images/map.png" width="100%" height="100%"></a>
    </div>

    <div id="companyContact">
      <p>Brunas Estate Agents</p>
      <p>14 Orchard Green</p>
      <p>Brooklawns, Sligo.</p>
      <br>
      Telephone:
      <a href="tel:123-456-7890">123-456-7890</a><p>
      Email:
      <a href = "mailto: info@BrunasEstateAgents.ie">info@BrunasEstateAgents.ie</a>
    </div>
    <br>
    <div class="form">
      <h3>Contact Us Today</h3>
      <form method="post" action="enquirySubmitted.php">
        <label>Title: </label>
        <input type="text" name="title" required="required"><br>
        <label >Enquiry:</label>
        <textarea name="content" rows="8" cols="30" ></textarea><br>
        <label >Name:</label>
        <input type="text" name="author_name" required="required"><br>
        <label >Email:</label>
        <input type="email" name="author_email" required="required"><br>
        <input type="submit" id="mysubmit" name="submit" value="Submit" required="required">
      </form>
    </div>
  </div>
</html>