<!-- This file will be used to show how to submit data to mysql db -->


<?php
  if(isset($_POST["submit"]))
  {
    $username= $_POST["username"];
    $password = $_POST["password"];

    $connection= mysqli_connect('localhost','root','bonfire09',"loginapp");

    if($connection)//checking if we have a connection to the db
        {
          echo "we are connencted";
        }
    else {
          die("Database connection failed");
        }

    //Query to submit data to db
    $query = "INSERT INTO users(username,password) VALUES"."('$username','$password')";
    $result=mysqli_query($connection,$query);

    if(!$result){
      die("Query Failed");
    }


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

        <form action="lec41 login_create.php" method="post">
          <div class="form-group">
            <label for="username">Username</label>
              <input type="text" name="username" class="form-control">
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
          </div>

          <input type="submit" name="submit" class="btn btn-primary" value="Submit">



        </form>
      </div>

    </div>

  </body>
</html>
