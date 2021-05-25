<!DOCTYPE HTML>
<html lang="en">
  <head>
    <title>Brunas Estate Agents</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <?php
      
    ?>
    <div id="container">
      <?php include("includes/header.html");?>
      <?php include("includes/nav.html");?>
      <div class="content">
        <?php
          include 'includes/messagePopup.php';

          if($_GET["pageName"] == "home"){
            include("index.php");
          } elseif($_GET["pageName"] == "displayAllProperties"){
            include("displayAllProperties.php");
          } elseif ($_GET["pageName"] == "propertyDetails") {
            include("propertyDetails.php");
          } elseif ($_GET["pageName"] == "testimonials") {
            include("testimonials.php");
          } elseif ($_GET["pageName"] == "testimonialSubmitted") {
            include("testimonialSubmitted.php");
          } elseif ($_GET["pageName"] == "contactUs") {
            include("contactUs.php");
          } elseif ($_GET["pageName"] == "enquirySubmitted") {
            include("enquirySubmitted.php");
          } elseif ($_GET["pageName"] == "adminLogin") {
            include("adminLogin.php");
          } elseif ($_GET["pageName"] == "adminLoggedIn") {
            include("adminLoggedIn.php");
          } elseif ($_GET["pageName"] == "manageTestimonials") {
            include("manageTestimonials.php");
          } elseif ($_GET["pageName"] == "manageProperties") {
            include("manageProperties.php");
          } elseif ($_GET["pageName"] == "addProperty") {
            include("addProperty.php");
          } elseif ($_GET["pageName"] == "editProperty") {
            include("editProperty.php");
          } elseif ($_GET["pageName"] == "deleteProperty") {
            include("deleteProperty.php");
          } elseif ($_GET["pageName"] == "processAddProperty") {
            include("processAddProperty.php");
          } elseif ($_GET["pageName"] == "manageVendors") {
            include("manageVendors.php");
          } elseif ($_GET["pageName"] == "addVendor") {
            include("addVendor.php");
          } elseif ($_GET["pageName"] == "editVendor") {
            include("editVendor.php");
          } elseif ($_GET["pageName"] == "deleteVendor") {
            include("deleteVendor.php");
          } elseif ($_GET["pageName"] == "processAddVendor") {
            include("processAddVendor.php");
          } elseif ($_GET["pageName"] == "viewEnquiries") {
            include("viewEnquiries.php");
          } else{
            echo "Page Content goes here......";
          }
        ?>
        <?php include("includes/footer.html");?>  
      </div>
    </div>
  </body>
</html>