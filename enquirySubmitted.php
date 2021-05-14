
<?php
  require 'connect.php';
  $title=$_POST["title"];
  $content=$_POST["content"];
  $author_name=$_POST["author_name"];
  $email=$_POST["author_email"];
  $sql_insert="INSERT INTO enquiry(title, content, author_name, author_email)
  VALUES ('$title', '$content', '$author_name', '$email')";

  if(mysqli_query($link, $sql_insert)) {
    header("Location: template.php?pageName=contactUs&success=true&message=Thank you for submitting your enquiry. We will contact you shortly.");
    exit;
  }
  else {
    header("Location: template.php?pageName=contactUs&success=false&message=An error occurred, try again!");
    exit;
  }
  mysqli_close($link);
?>