<?php
//Datos para la conexión
  // 1. Create a database connection
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "pruebabd";
  $tablename= "agenda";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>

<?php
	// Often these are form values in $_POST
	$ID = (int) 5;
	$name = "mjjose";
	$email = "mjjose@universidadeuropea.es";
	
	// Escape all strings
	$name = mysqli_real_escape_string($connection, $name);
	
	
	// 2. Perform database query
	
	// UPDATE `agenda` SET `nombre` = 'mjjose', 
	//`email` = 'mjjose@universidadeuropea.es' 
	//WHERE `agenda`.`ID` = 5 
	
	// 2. Perform database query
	
	$query  = "UPDATE `$tablename` SET ";
	$query .= "`nombre` = '$name', ";
	$query .= "`email` = '$email' ";
	$query .= "WHERE `$tablename`.`ID`  = $ID;";
	echo "<br>$query<br>";
	
	$result = mysqli_query($connection, $query);
	
	
	
	if ($result && mysqli_affected_rows($connection) == 1) {
		// Success
		// redirect_to("somepage.php");
		echo "Success!";
	} else {
		// Failure
		// $message = "Subject update failed";
		die("Database query failed. " . mysqli_error($connection));
	}
?>



<?php
  // 5. Close database connection
  mysqli_close($connection);
?>