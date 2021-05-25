<!DOCTYPE HTML>
<html lang="en">
  <div id="content">
    <?php
      require 'connect.php';
      $sql="SELECT * from property ";
      $category = "All Properties";
      if (isset($_GET["categoryid"])) {
        $categoryId = $_GET["categoryid"];
        $category = $_GET["name"];
        $sql = "$sql INNER JOIN category ON category.categoryId = property.categoryId WHERE property.categoryId = $categoryId";
      }
    ?>

    <h2><?php echo $category ?></h2>

      <?php
        $result=mysqli_query($link, $sql);
        if(mysqli_num_rows($result)>0){
          $cols = 3; 
          $counter = 1;
          while($row=mysqli_fetch_array($result)) {
            if(($counter % $cols) == 1) { 
      ?>
              <br><br>
              <div class="newrow">
              <?php
            }
            $propertyid=$row["propertyid"];
            $image=$row["image"];
            $shortdescription=$row["shortdescription"];
            $address1=$row["address1"];
            $price=$row["price"];?>
              <div class="col">
                <div class="card">
                    <?php
                      echo '<div id="img" style="background-image: url(\'' . $image . '\'); background-size:cover;"></div>';
                    ?>
                    <hr>
                  <div class="card-body">
                    <?php
                      echo "<strong>Address: </strong>$address1"; 
                      echo "</p>";
                      echo "<div id=\"shortDescription\">
                      <strong>Short Description: </strong>$shortdescription</div>"; 
                      echo "</p>";
                      setlocale(LC_MONETARY, 'nl_NL.UTF-8');
                      $displayPrice = number_format($price, 2, '.', ',');
                      echo "<strong>Price: </strong> € $displayPrice";
                      echo "</p>"
                    ?>
                    <div class="detailslink">
                      <?php echo "<a href='template.php?propertyid=$propertyid&pageName=propertyDetails'><button>More Details</button></a>";?>
                      <br><br>
                    </div>
                  </div>
                </div>
              </div>
              <?php
            if(($counter % $cols) == 0) { 
              echo "</div>"; 
            }
            $counter++; 
          } 
        } 
        echo"</div><br><br>"; 
        mysqli_free_result($result);
        mysqli_close($link); ?>
  </div>
</html>