<!-- Suppose I want to add the h1 tag on 20 pages, how do we do this -->
<!-- Use a variable and echo it out on the different pages as below -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $title="Raji's Personal Site";
    ?>

      <h1><?php echo $title ?></h1>
  </body>
</html>
