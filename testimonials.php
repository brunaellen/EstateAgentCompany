<!DOCTYPE HTML>
<html lang="en">
  <div id="content">
    <div id="testimonialH2"><h2>Testimonials</h2></div>
    <?php
      require 'connect.php';
      $sql="SELECT * from testimonial WHERE status='approved'";
      $result=mysqli_query($link, $sql); 
    ?>

    <div class="table">
      <?php
        if(mysqli_num_rows($result)>0){
          echo "<table>";
          echo "<tr>
          <th>Title</th>
          <th>Content</th>
          <th>Author</th>
          <th>Created</th>
          </tr>";

          while($row=mysqli_fetch_array($result)){
            $title=$row["title"];
            $content=$row["content"]; 
            $author=$row["author_name"];
            $created=$row["created_at"];
            echo "<tr>
            <td>$title</td>
            <td>$content </td>
            <td>$author</td>
            <td>$created</td>
            </tr>";
          }
          echo "</table>";
        } else {
          echo("there are currently no comments in the database");
        }
      mysqli_close($link);
      ?>
    </div>
    <div class="form">
      <h3>Add a Testimonial</h3>
      <p>Please leave your feedback on your experience of our site. We appreciate your feedback and take all your comments into consideration! </p>
      <!--form for user to enter feedback -->
      <form method="post" action="testimonialSubmitted.php">
        <label>Title: </label>
        <input type="text" name="title" required="required"><br>
        <label >Content:</label>
        <textarea name="content" rows="8" cols="30" ></textarea><br>
        <label >Name:</label>
        <input type="text" name="author_name" required="required"><br>
        <label >Email:</label>
        <input type="email" name="author_email" required="required"><br>
        <input type="submit" id="mysubmit" name="submit" value="Add Comment" required="required">
      </form>
    </div>
  </div>
</html>