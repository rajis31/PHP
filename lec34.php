<!-- THis will go over form validation -->
<?php

    if(isset($_POST["submit"]))
    {
    $min=5;
    $max=10;
    $name= array("Edwin","Student","Peter","Samid","Mohad","Maria","Jane","tom");
    $username = $_POST["name"];
    $password = $_POST["pass"];
      if (strlen($username)<$min){ //check string length
            echo "Username has to be longer then 5 <br>";

      }
      if (strlen($username)>$max){ //check string length
            echo "Username can't be longer than 10 <br>";

      }
      if(!in_array($username,$name ))//check if value is not in array using in in_array(value, array) function
      {
            echo "Sorry you are not allowed <br>";
          
      }
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

      <form class="" action="lec34.php" method="post"> <!-- post method is to send data -->
        <input type="text" placeholder="Enter Name" name="name"><!-- The name attribute is the variable being submitted -->
        <input type="password" placeholder="Enter password" name="pass">
        <br>
        <input type="submit" name="submit"> <!-- The submit value is what is being submitted -->

      </form>


  </body>
</html>
