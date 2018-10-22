<!-- Functions -->


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
        function init() {
          say_something();
        }

        function say_something(){
          echo "This function is saying something";
        }
        init();//Calling functions within another function 
      ?>

  </body>
</html>
