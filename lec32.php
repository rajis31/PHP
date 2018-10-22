<?php



	if(isset($_POST["submit"])){//here it will run first when the data from this file to itself (check the page mentioned in action) and  is sent via POST
		//when info gets submitted it gets submitted to an array
		//when checking for $_POST["submit"] we are checking if its available via isset
		//isset checks whether a variable is null or has a variable which returns true 
		echo "Found submit";
		echo "<br>";

	}

	if(isset($_POST["pass"])){

		echo "Found Password";
		echo "<br>";


	}
	if(isset($_POST["name"])){
		echo "Found Name";
	}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <!-- $_POST - This is a super global variable that fetches data from a form -->

      <form class="" action="lec32.php" method="post"> <!-- post method is to send data -->
        <input type="text" placeholder="Enter Name" name="name"><!-- The name attribute is the variable being submitted -->
        <input type="password" placeholder="Enter password" name="pass">
        <br>
        <input type="submit" name="submit"> <!-- The submit value is what is being submitted -->

      </form>


  </body>
</html>
