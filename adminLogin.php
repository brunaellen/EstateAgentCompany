<!DOCTYPE HTML>
<html lang="en">
  <div id="content">
    <?php
      if (empty($_SESSION)) /* if session is empty, then start a session */
        session_start();

      if (isset($_SESSION['username'])) {
        header("Location:template.php?pageName=adminLoggedIn");
        exit;
      }
      
      if (isset($_SESSION['errors'])) { /* if session is setted with variable(errors), then print error message*/
        echo "<div class='form-errors'>";
        foreach($_SESSION['errors'] as $error){
          echo "<p>";
          echo $error;
          echo "</p>";
        }
        echo "</div>";
      }
      unset($_SESSION['errors']);
    ?>
    
    <div class="loginForm">
      <form action="loginAction.php" method="POST">
        <h3> Login </h3>
        <p> Username: <input type="text" name="admin_name" required="required"></p>
        <p>
          Password: <input type="password" name="password" required="required">
        </p>
        <p>
          <input style="border: 1px solid grey;" type="submit" value="Login">
        </p>
      </form>
    </div>

  </div>
</html>