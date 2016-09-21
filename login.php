<?php
	
	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	
	$signupEmailError = "";
	$signupPasswordError = "";
	
	// kas e/post oli olemas
	if ( isset ( $_POST["signupEmail"] ) ) {
		
		if ( empty ( $_POST["signupEmail"] ) ) {
			
			// oli email, kuid see oli t�hi
			$signupEmailError = "See v�li on kohustuslik!";
			
		}
		
	}
	
	if ( isset ( $_POST["signupPassword"] ) ) {
		
		if ( empty ( $_POST["signupPassword"] ) ) {
			
			// oli password, kuid see oli t�hi
			$signupPasswordError = "See v�li on kohustuslik!";
			
		} else {
			
			// tean et parool on ja see ei olnud t�hi
			// V�HEMALT 8
			
			if ( strlen($_POST["signupPassword"]) < 8 ) {
				
				$signupPasswordError = "Parool peab olema v�hemalt 8 t�hem�rkki pikk";
				
			}
			
		}
		
	}
	
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sisselogimise lehek�lg</title>
	</head>
	<body>

		<h1>Logi sisse</h1>
		
		<form method="POST">
			
			<label>E-post</label><br>
			<input name="loginEmail" type="email">
			
			<br><br>
			
			<input name="loginPassword" type="password" placeholder="Parool">
			
			<br><br>
			
			<input type="submit" value="Logi sisse">
			
		</form>
		
		<h1>Loo kasutaja</h1>
		
		<form method="POST">
			
			<label>E-post</label><br>
			<input name="signupEmail" type="email"> <?php echo $signupEmailError; ?>
			
			<br><br>
			
			<input name="signupPassword" type="password" placeholder="Parool"> <?php echo $signupPasswordError; ?>
			
			<br><br>
			
			<input type="submit" value="Loo kasutaja">
			
		</form>
		
	</body>
</html>