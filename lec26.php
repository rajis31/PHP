<!-- Global scope - any variable outside the functions -->



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

      <?php

        $x="outside";//global

        function convert(){
          global $x;//this is how you change at the global variable by using the global function 
          $x="inside";
        }

        echo $x."<br>";
        convert();//wont change variable
        echo $x;
      ?>
  </body>
</html>
