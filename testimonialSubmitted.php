
<?php
  require 'connect.php';

  $title=mysqli_real_escape_string($link, $_POST["title"]);
  $content=mysqli_real_escape_string($link, $_POST["content"]);
  $author_name=mysqli_real_escape_string($link, $_POST["author_name"]);
  $email=mysqli_real_escape_string($link, $_POST["author_email"]);
  $sql_insert="INSERT INTO testimonial(title, content, author_name, author_email)
  VALUES ('$title', '$content', '$author_name', '$email')";

  if(mysqli_query($link, $sql_insert)) {
    header("Location: template.php?pageName=testimonials&success=true&message=Thank you for your feedback. Our administrators moderate all comments and it will be attended to shortly.");
    exit;
  }
  else {
    header("Location: template.php?pageName=testimonials&success=false&message=An error occurred, try again!");
    exit;
  }
  mysqli_close($link);
?>