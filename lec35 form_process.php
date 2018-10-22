<?php

    if(isset($_POST["submit"])) //$_POST is a superglobal to collect data
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

  </body>
</html>
