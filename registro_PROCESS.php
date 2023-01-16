<?php
/*La base de datos no tiene atributos NOT NULL por lo que se pueden insertar usuarios vacios */
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

	function find_user_by_username($numexpediente, $connection)
	{
		$safe_username = mysqli_real_escape_string($connection, $numexpediente);
		$query = "SELECT num_expediente ";
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

	function attempt_login($numexpediente, $connection)
	{
		$user = find_user_by_username($numexpediente, $connection);
		if ($user) {
			//user encontrado
			return $user;
		} else {
			// user not found
			//echo "Usuario no encontrado";
			return false;
		}
	}

	if (isset($_POST['nombre'])) {

		$nombre = $_POST["nombre"];
	}
	if (isset($_POST['apellidos'])) {

		$apellidos = $_POST["apellidos"];
	}
	if (isset($_POST['numexpediente'])) {

		$numexpediente = $_POST["numexpediente"];
		$pattern = "/^[0-9]{8}$/";
		if (preg_match($pattern, $numexpediente)) {
			// El número de expediente es válido
		} else {
			// El número de expediente no es válido
			echo '<script type="text/javascript">
        			alert("El número de expediente no es válido, por favor ingresa un numero de 8 digitos.");
					window.location.href="login.php#register";
        		</script>';
		}
	}
	if (isset($_POST['email'])) {

		$email = $_POST["email"];
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

		} else {
			// La dirección de correo electrónico no es válida, cumple con los estandares, como por ejemplo que tenga un arroba y un dominio válido.
			echo '<script type="text/javascript">
        			alert("La dirección de correo electrónico no es válida, no cumple con los estándares.");
					window.location.href="login.php#register";
        		</script>';
		}
	}
	if (isset($_POST['password'])) {

		$password = $_POST["password"];
	}

	$found_user = attempt_login($numexpediente, $connection);
	$tablename = "usuario";
	if ($found_user) {
		echo '<script type="text/javascript">
        			alert("El numero de expediente que has introducido ya existe. Si crees que es un fallo contacta con algun organizador del club.");
					window.location.href="login.php";
        		</script>';
	} else {
		//Encriptar password
		$pass_s = password_hash($password, PASSWORD_DEFAULT);
		$query = "INSERT INTO `$tablename` (";
		$query .= "  `nombre`, `apellidos`,`num_expediente`, `email`,`password`";
		$query .= ") VALUES (";
		$query .= " '$nombre', '$apellidos', '$numexpediente', '$email', '$pass_s' ";
		$query .= ")";

		$result = mysqli_query($connection, $query);

		if ($result) {
			header("Location: " . "./index.php");
		} else {
			die("Database query failed. " . mysqli_error($connection));
		}
	}
	// 5. Close database connection
	mysqli_close($connection);
}
?>