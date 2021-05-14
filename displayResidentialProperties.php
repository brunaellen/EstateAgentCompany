<!DOCTYPE HTML>
<html lang="en">
  <div id="content">
    <div id="displayProperties">
      <?php
        require 'connect.php';
        $categoryid=$_GET["categoryid"]; //parameter is passed in the url and accessed using GET
        $sql="SELECT * from property, category WHERE property.categoryid=$categoryid AND
        category.categoryid=$categoryid"; //accessing records from both tables to identify the categoryname as well as the product records in that category

        $output=mysqli_query($link, $sql);
        $getcategory=mysqli_fetch_array($output);
        echo "<h2>";
        echo $getcategory["categoryname"]; //display category name at top of page
        echo "</h2>";

        $result=mysqli_query($link, $sql);
        if(mysqli_num_rows($result)>0){
          $cols = 3; // Define number of columns you want
          $counter = 1; // Counter used to identify if we need to start or end a row
          while($row=mysqli_fetch_array($result)) {
            if(($counter % $cols) == 1) { // Check if it's new row ?>
              <br><br><!--space between rows-->
              <div class="newrow"><!--start a new row-->
              <?php
            }
            $propertyid=$row["propertyid"];
            $image=$row["image"];
            $shortdescription=$row["shortdescription"];
            $address1=$row["address1"];
            $price=$row["price"]; ?>
              <div class="col"><!--create a column for a property-->
                <div class="card"><!--create a styled card for a property-->
                    <?php
                      echo '<div id="img" style="background-image: url(\'' . $image . '\'); background-size:cover;"></div>';
                    ?>
                    <hr>
                  <div class="card-body">
                    <?php
                      echo "<h4>$address1</h4>"; //output the product name
                      echo "</p>";
                      echo "$shortdescription"; //output the product short desc
                      echo "</p>";
                      echo "$price"; //output the product short desc
                      echo "</p>"
                    ?>
                    <div class="detailslink">
                      <?php echo "<a href='template.php?propertyid=$propertyid&pageName=propertyDetails'><button>More Details</button></a>";?>
                      <br><br>
                    </div><!--close detailslink-->
                  </div><!--close the card-body-->
                </div><!--close the card-->
              </div><!--close the column-->
              <?php
            if(($counter % $cols) == 0) { // If it's last column in each row then counter remainder will be zero
              echo "</div>"; //close the row
            }
            $counter++; // increase the counter
          } //end of while loop
        } //end if
        echo"</div><br><br>"; //close the last row and add some space
        mysqli_free_result($result); //free the memory associated with result
        //close database
        mysqli_close($link); ?>
    </div><!--close displayProperties div-->
  </div><!--close content div-->
</html>