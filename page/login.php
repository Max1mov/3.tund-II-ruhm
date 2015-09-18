<?php
	
	//echo $_POST["email"];
	
	//Defineerime muutujad
	$email_error = "";
	$password_error = "";
	$name_error = "";
	
	//muutujad väärtuste jaoks
	$name = "";
	$email = "";
	
	//kontrollin kas keegi vajutas nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		
		// kontrollin mis nuppu vajutati
		if(isset($_POST["login"])){
			
			// ********************
			// *** LOGIN NUPP *****
			// ********************
			
			// kas e-post on tühi
			if( empty($_POST["email"]) ) {
				
				// jah oli tühi
				$email_error = "See väli on kohustuslik";
				
			}else{ 
				$email = test_input($_POST["email"]);
			}
			
			// kas parool on tühi
			if( empty($_POST["password"]) ) {
				
				// jah oli tühi
				$password_error = "See väli on kohustuslik";
				
			}
		
		
		} elseif(isset($_POST["create"])){
		
			// ********************
			// *** CREATE NUPP ****
			// ********************
			
			// kas nimi on tühi
			if( empty($_POST["name"]) ) {
				
				// jah oli tühi
				$name_error = "See väli on kohustuslik";
				
			}else {
				
				$name = test_input($_POST["name"]);
			}
			
			// errorit ei olnud, mitu errorit && 
			if($name_error == ""){
				
				echo "salvestan ab'i ".$name;
				
			}
		
		
		}
		
	}
	
	
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

?>
<?php
	$page_title = "Login leht";
	$file_name = "login.php";
?>
<?php require_once("../header.php"); ?>
	<h2>Login</h2>
	<form action="login.php" method="post">
		<input name="email" type="email" placeholder="E-post" value="<?php echo $email ?>" > <?php echo $email_error; ?><br><br>
		<input name="password" type="password" placeholder="Parool" > <?php echo $password_error; ?> <br><br>
		<input name="login" type="submit" value="Logi sisse" > <br><br>
	</form>
	
	
	<h2>Create user</h2>
	<form action="login.php" method="post">
		<input name="name" type="text" placeholder="Eesnimi Perenimi" value="<?php echo $name ?>" > <?php echo $name_error; ?><br><br>
		<input name="create" type="submit" value="Loo kasutaja" > <br><br>
	</form>
	 
<?php require_once("../footer.php"); ?>