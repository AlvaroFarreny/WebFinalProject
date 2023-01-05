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
	$NOMBRE = "Fernando";
	
	
	// 2. Perform database query
	
	//DELETE FROM `agenda` WHERE `agenda`.`nombre` = KARLA"?

	// 2. Perform database query
	
	$query  = "DELETE FROM `$tablename`";
	$query .= "WHERE `$tablename`.`nombre`  = '$NOMBRE';";
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