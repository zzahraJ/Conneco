<?php
	include_once("functions.inc.php");

	if(!empty($_POST)){ //werkt als de form gepost is
		$username=$_POST["email"]; //want name email gegeven onderaan
		$password= $_POST["password"]; //want name password gegeven onderaan
		
		if(canLogin($username, $password)){ //in functie parameters die enkel in functie staan, w nu ingevuld met variabelen hierboven
			session_start();
			$_SESSION["loggedin"] = true; //session leeft op server side (verschil met cookies!!)
			header("Location: dashboard.php"); //redirect
			//hieronder kan je geen cookies plaatsen omdat je al weggestuurd bent naar de nieuwe pagina 
		}

		else{
			$error = true;
		}

	} // hier werkt isset niet, want zelfs als er niets in zit bestaat het wel
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>IMDFlix</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="connecoLogin">
		<div class="form form--login">
			<form action="" method="post"> 
				<h2 form__title>Sign In</h2>

			<?php if(isset($error)):?> <!--hier zou je ook met !empty kunnen werken maar is ingewikkelder-->
				<div class="form__error">
					<p>
						Sorry, we can't log you in with that email address and password. Can you try again?
					</p>
				</div>
			<?php endif?>
				<div class="form__field">
					<label for="Email">Email</label>
					<input type="text" name="email">
				</div>
				<div class="form__field">
					<label for="Password">Password</label>
					<input type="password" name="password">
				</div>

				<div class="form__field">
					<input type="submit" value="Sign in" class="btn btn--primary">	
					<input type="checkbox" id="rememberMe"><label for="rememberMe" class="label__inline">Remember me</label>
				</div>
			</form>
		</div>
	</div>
</body>
</html>

