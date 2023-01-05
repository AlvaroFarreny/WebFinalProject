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
	$name = "Jose";
	$email = "jose@universidadeuropea.es";
	
	// Escape all strings
	$name = mysqli_real_escape_string($connection, $name);
	
	// 2. Perform database query
	
	//"INSERT INTO `agenda` (`ID`, `nombre`, `email`) VALUES ('4', 'Jose Pino', 'josep@prueba.com');";
	
	$query  = "INSERT INTO `$tablename` (";
	$query .= "  `ID`, `nombre`, `email`";
	$query .= ") VALUES (";
	$query .= " '$ID', '$name', '$email'";
	$query .= ")";
	echo $query;
	
	$result = mysqli_query($connection, $query);

	if ($result) {
		// Success
		// redirect_to("somepage.php");
		echo "Success!";
	} else {
		// Failure
		// $message = "Subject creation failed";
		die("Database query failed. " . mysqli_error($connection));
	}
?>


<html lang="es">
	<head>
		<title>Prueba PHP y MySQL</title>
	</head>
	<body>
		
	</body>
</html>

<?php
  // 5. Close database connection
  mysqli_close($connection);
?>