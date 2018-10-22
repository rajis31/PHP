<!-- exercise -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
        $number1=5;
        $number2=10;

        echo $number1+$number2."<br>";

        $arr1=[$number1,$number2];
        $arr2=["1"=>$number1,"2"=>$number2];

        print_r($arr1);
        print_r("<br>");
        print_r($arr2);
      ?>


  </body>
</html>
