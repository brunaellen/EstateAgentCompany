<!DOCTYPE HTML>
<html lang="en">
  <div id="content">

    <div id="testimonialH2"><h2>Manage Testimonials</h2></div>
    <?php
      require 'connect.php';
      $sql="SELECT * from testimonial ORDER BY id ASC;";
      $result=mysqli_query($link, $sql); 
    ?>

    <div class="table">
      <?php
        if(mysqli_num_rows($result)>0){
          echo "<table>";
          echo "<tr>
          <th>Id</th>
          <th>Title</th>
          <th>Content</th>
          <th>Author</th>
          <th>Created</th>
          <th>Status</th>
          <th>Update</th>
          <th>Delete</th>
          </tr>";

          while($row=mysqli_fetch_array($result)){
            $id=$row["id"];
            $title=$row["title"];
            $content=$row["content"]; 
            $author=$row["author_name"];
            $created=$row["created_at"];
            $status=$row["status"];
            echo "<tr>
            <td>$id</td>
            <td>$title</td>
            <td>$content</td>
            <td>$author</td>
            <td>$created</td>
            <td>$status</td>
            <td> <button><a href='approveTestimonial.php?id=$id'>Approve</a></button></td>
            <td> <button><a href='deleteTestimonial.php?id=$id'>Delete</a></button></td>
            </tr>";
          }
          echo "</table>";
        } else {
          echo("there are currently no testimonials in the database");
        }
      mysqli_close($link);
      ?>
    </div>
    <p>
      <button onclick="goBack('template.php?pageName=adminLoggedIn')">Go Back</button>
    </p>
  </div>
</html>