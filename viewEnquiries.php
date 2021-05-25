<!DOCTYPE HTML>
<html lang="en">
  <div id="content">
    <div id="enquiriesH2"><h2>View Enquiries Submitted</h2></div>
    <?php
      require 'connect.php';
      $sql="SELECT * from enquiry ORDER BY id ASC;";
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
          <th>Email</th>
          <th>Created</th>
          <th>Delete</th>
          </tr>";

          while($row=mysqli_fetch_array($result)){
            $id=$row["id"];
            $title=$row["title"];
            $content=$row["content"]; 
            $author=$row["author_name"];
            $email=$row["author_email"];
            $created=$row["created_at"];
            echo "<tr>
            <td>$id</td>
            <td>$title</td>
            <td>$content </td>
            <td>$author</td>
            <td>$email</td>
            <td>$created</td>
            <td> <button><a href='processDeleteEnquiries.php?id=$id'>Delete</a></button></td>
            </tr>";
          }
          echo "</table>";
        } else {
          echo("There are currently no Enquiries in the database");
        }
      mysqli_close($link);
      ?>
      <p>
      <button onclick="goBack('template.php?pageName=adminLoggedIn')">Go Back</button>
      </p>
    </div>
  </div>
</html>