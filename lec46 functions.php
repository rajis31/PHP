<!-- Used to refactor code and things like updating data and showing data are each a separate function -->

<?php include "lec46 dbConnect.php"; ?>

<?php
    function showAllData(){
    global $connection;
    $query = "SELECT * FROM users";
    $result=mysqli_query($connection,$query);
    if(!$result){
      die("Query Failed");
    }



    while($row=mysqli_fetch_assoc($result))
    {
      $id=$row["id"];
      echo "<option value='$id'>".$id."</option>"; //his will be he record with the id selected we will be updating in db
    }

    }

    function updateData(){
      global $connection;

          $username = $_POST["username"];
          $password = $_POST["password"];
          $id = $_POST["id"];

          $query = "UPDATE users SET username= '$username', password='$password' WHERE id=$id";

          $result = mysqli_query($connection, $query);
            if(!$result){
              die("<br>Query died".mysqli_error($connection));//add in mysql_error to get more info about error
            }

    }



 ?>
