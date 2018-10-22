<!-- THis will go over form validation -->
<!-- In lecture 35 we will submit the information in this form on a different page -->
<!-- Moved over the php code to the form_process to process the data -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <!-- $_POST - This is a super global variable that fetches data from a form -->

      <form class="" action="lec35 form_process.php" method="post"> <!-- post method is to send data. In Lec 35 we will send the data to an external page -->
        <input type="text" placeholder="Enter Name" name="name"><!-- The name attribute is the variable being submitted -->
        <input type="password" placeholder="Enter password" name="pass">
        <br>
        <input type="submit" name="submit"> <!-- The submit value is what is being submitted -->

      </form>


  </body>
</html>
