<?php
//Datos para la conexión
  // 1. Create a database connection
  $dbhost  = "localhost";  //IP del servidor de BBDD
  $dbuser = "root";			// Usuario de la BBDD
  $dbpass = "";				// Contraseña
  $dbname = "pruebabd";		// Nombre de la Base de Datos
  $tablename= "agenda";		// Nombre de la tabla 

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

	/* Ver toda la tabla */ 
	echo "<b>Ver toda la tabla </b> <br>";
	
	$query = "SELECT * FROM `$tablename`" ;
	
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
	echo "<BR>";
	if ($result->num_rows > 0) {
    // output data of each row
    	while($row = $result->fetch_assoc()) {
        	echo "id: " . $row["ID"]. " - Name: " . $row["nombre"]. " " . $row["email"]. "<br>";
    	}
	} else {
    	echo "0 results";
	}
echo "<br><br>";
?>

<?php
	
	/* Ver la tabla especificando las columnas */ 
	
	echo "<b>Ver la tabla especificando las columnas </b> <br>";
	
	$query = "SELECT ID, nombre, email FROM `$tablename` ";
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
	echo "<BR>";
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " - Name: " . $row["nombre"]. " " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
echo "<br><br>";
?>

<?php
	// Often these are form values in $_POST
	$ID = (int) 1;
	$NOMBRE = "Jose";

	/* Ver un elemento de la tabla, especificando el ID */ 
	echo "<b>Ver un elemento de la tabla, especificando el ID  </b> <br>";
	
	$query = "SELECT  email FROM `$tablename` WHERE `$tablename`.`nombre`  = '$NOMBRE'";
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
	echo "<BR>";
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
	
 echo "<br><br>";
?>

<?php
  // 5. Close database connection
  mysqli_close($connection);
?>