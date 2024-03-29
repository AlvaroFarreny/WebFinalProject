<body style="background: linear-gradient(to right, #C02626 0%, rgb(118, 0, 0) 100%);">

</body>
<?php
session_start();

if (isset($_SESSION['numexpediente'])) {
	header("Location: " . "./index.php");
} else {
	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "");
	define("DB_NAME", "webfinalproject");

	// 1. Crear conexión con la BBDD
	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	// Test if connection succeeded
	if (mysqli_connect_errno()) {
		die("La conexión con la BBDD ha fallado: " .
			mysqli_connect_error() .
			" (" . mysqli_connect_errno() . ")"
		);
	}

	function find_user_by_username($numexpediente, $password, $connection)
	{

		$safe_username = mysqli_real_escape_string($connection, $numexpediente);
		$query = "SELECT password ";
		$query .= "FROM usuario ";
		$query .= "WHERE num_expediente = '$numexpediente'";
		$query .= "LIMIT 1"; //Como username es primario no lo necesito
		$user_set = mysqli_query($connection, $query);
		if (!$user_set) {
			die("Database query failed.");
		}

		if ($user = mysqli_fetch_assoc($user_set)) {
			return $user;
		} else {
			return null;
		}
	}

	function attempt_login($numexpediente, $password, $connection)
	{
		$user = find_user_by_username($numexpediente, $password, $connection);
		if ($user) {
			//user encontrado
			return $user;
		} else {
			// user not found
			//echo "Usuario no encontrado";
			return false;
		}
	}

	if (isset($_POST['numexpediente'])) {
		// check if the username has been set
		$numexpediente = $_POST["numexpediente"];
	}
	if (isset($_POST['password'])) {
		// check if the username has been set
		$password = $_POST["password"];
	}


	$found_user = attempt_login($numexpediente, $password, $connection);

	if ($found_user) {
		// Success
		if (password_verify($password, $found_user["password"])) {
			$_SESSION["numexpediente"] = $_POST['numexpediente'];
			header("Location: " . "./index.php");
		} else {
			echo '<script type="text/javascript">
        			alert("La contraseña no es válida");
					window.location.href="login.php";
					
        		</script>';

		}


	} else {
		echo '<script type="text/javascript">
        		alert("El usuario no es válido");
				window.location.href="login.php";
        	</script>';
	}

	// 5. Close database connection
	mysqli_close($connection);
}
?>