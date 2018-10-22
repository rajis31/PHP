<!-- Go over associative arrays r arrays pulled by name -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      $number = array(2,3,4,5);
      echo $number[3] ."<br>";

      $numbers= array("one"=>2, "two"=>3,"three"=>4,"four"=>5);//this is an associative array where your using
      //a named index aka key and we usually use this when we care about order
      print_r ($numbers);
     ?>

  </body>
</html>
