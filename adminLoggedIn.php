<!DOCTYPE HTML>
<html lang="en">
<div id="content">
  <h3> Administrator Area</h3>
  <div class="adminLoggedIn">
    <?php
      session_start();
      if (isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        echo "Hi " . $username . "!" . "";
        echo "<p>";
        echo "<h4>Choose one option from the menu.</h4>";
        echo "<p><button><a href='template.php?pageName=manageTestimonials'>Manage Testimonials</a></button>
        <p><button><a href='template.php?pageName=manageProperties'>Manage Properties</a></button>
        <p><button><a href='template.php?pageName=manageVendors'>Manage Vendors</a></button>
        <p><button><a href='template.php?pageName=viewEnquiries'>View Enquiries</a></button>
  </div>";
        echo "<div id=\"logout\"><button><a href='logout.php'>Logout</a></button></div>";
      }
    ?>
</div>
</html>