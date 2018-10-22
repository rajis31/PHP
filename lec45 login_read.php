<!-- This file will be used to show how to read data from mysql db -->


<?php
    include "lec46 db.php"; //This is to include external files
    //Query to submit data to db
    $query = "SELECT * FROM users";
    $result=mysqli_query($connection,$query);

    if(!$result){
      die("Query Failed");
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="col-sm-6">
        <?php
        // while ($row=mysqli_fetch_row($result)) {
        //   print_r($row);
        // }
        while ($row=mysqli_fetch_assoc($result)) { //mysqli_fetch_assoc() returns an associative array with the indices of the array being the column names hence more descriptive
          ?>
          <pre>
        <?php  //here we open and close a series of php tags to have the output in a nice format
            print_r($row);
            }
        ?>
        </pre>
      </div>
    </div>

  </body>
</html>
