<!-- GO over variables in php -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      $name="raji";//single quotes work too
      $number= 100;

      echo $name ."<br>";
      echo $name . " " . $number; //The . operator is for concatentation

      $name = "<h1> This is a html tag assigned to a variable </h1>";
      echo $name;

    ?>
  </body>
</html>
