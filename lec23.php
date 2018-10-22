<!-- Functions with parameters -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

        function greeting($message){
            echo $message."<br>";
        }
        greeting("This is the meessage passed in.");
        greeting("Message 2");

        function calculate($num1, $num2)
        {
          echo $num1+$num2;
          $sum=$num1+$num2
          echo $sum;
        }
        calculate(12,345);
     ?>

  </body>
</html>
