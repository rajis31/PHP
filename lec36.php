<!-- Practice -->

<?php
  if(isset($_POST["submit"]))
  {
    $name=$_POST["Name"];
    echo "Your name is ".$name;
  }

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <form class="" action="lec36.php" method="post">
        <input type="text" name="Name" placeholder="Enter your name here">
        <button type="submit" name="submit">Submit</button>

      </form>
  </body>
</html>
