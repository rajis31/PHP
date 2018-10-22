<?php

    if(isset($_POST["submit"]))
    {
    $username = $_POST["name"];
    $password = $_POST["pass"];
    echo "your username is ".$username; //Getting the variables from form
    <br>
    echo "Your password is".$password;
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <!-- $_POST - This is a super global variable that fetches data from a form -->

      <form class="" action="lec33.php" method="post"> <!-- post method is to send data -->
        <input type="text" placeholder="Enter Name" name="name"><!-- The name attribute is the variable being submitted -->
        <input type="password" placeholder="Enter password" name="pass">
        <br>
        <input type="submit" name="submit"> <!-- The submit value is what is being submitted -->

      </form>


  </body>
</html>
