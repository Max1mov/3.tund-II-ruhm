<?php
	
	//echo $_POST["email"];
	
	//Defineerime muutujad
	$email_error = "";
	$password_error = "";
	$name_error = "";
	
	//kontrollin kas keegi vajutas nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//echo "jah";
		
		// kas e-post on tühi
		if( empty($_POST["email"]) ) {
			
			// jah oli tühi
			$email_error = "See väli on kohustuslik";
			
		}
		
		// kas parool on tühi
		if( empty($_POST["password"]) ) {
			
			// jah oli tühi
			$password_error = "See väli on kohustuslik";
			
		}
		
	}

?>
<?php
	$page_title = "Login leht";
	$file_name = "login.php";
?>
<?php require_once("../header.php"); ?>
	<h2>Login</h2>
	<form action="login.php" method="post">
		<input name="email" type="email" placeholder="E-post" > <?php echo $email_error; ?><br><br>
		<input name="password" type="password" placeholder="Parool" > <?php echo $password_error; ?> <br><br>
		<input type="submit" value="Logi sisse" > <br><br>
	</form>
	
	
	<h2>Create user</h2>
	<form action="login.php" method="post">
		<input name="name" type="text" placeholder="Eesnimi Perenimi" > <?php echo $name_error; ?><br><br>
		<input type="submit" value="Loo kasutaja" > <br><br>
	</form>
	
<?php require_once("../footer.php"); ?>