<!-- Returning values from functions in php -->



<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

      <?php
        function addNumbers($num1,$num2){
          $sum=$num1+$num2;
          return $sum;
        }

        $val=addNumbers(12,15);
        echo $val."<br>";

        $val=addNumbers(12, $val);
        echo $val;

      ?>
  </body>
</html>
