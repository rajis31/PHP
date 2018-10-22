<!-- Refactoring code so we separate out the connection piece first -->

<?php
$connection= mysqli_connect('localhost','root','bonfire09',"loginapp");

if($connection)//checking if we have a connection to the db
    {
      echo "we are connencted";
    }
else {
      die("Database connection failed");
    }


 ?>
