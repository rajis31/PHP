<!-- This file will be used to show how to update data from mysql db -->


<?php
    include "lec46 functions.php";//contains wrapped functions
    include "lec46 dbConnect.php";
?>
<?php
  if(isset($_POST['submit'])){
      updateData();
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

                <form action="lec46 login_update.php" method="post">
                  <div class="form-group">
                    <label for="username">Username</label>
                      <input type="text" name="username" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                  </div>

                  <div class="form-group">
                    <select name="id" id="">
                      <?php
                          showAllData();
                        ?>
                    </select>

                  </div>

                  <input type="submit" name="submit" class="btn btn-primary" value="Update">
                </form>

      </div>
    </div>

  </body>
</html>
