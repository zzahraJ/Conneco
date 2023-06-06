<!-- php

include_once(__DIR__ . "/classes/Db.php");

if(!empty($_POST)){ //werkt als de form gepost is
    $username=$_POST["email"]; //want name email gegeven onderaan
    $password= $_POST["password"]; //want name password gegeven onderaan
    
    if(canLogin($username, $password)){  
        session_start();
        $_SESSION["loggedin"] = true; //session leeft op server side (verschil met cookies!!)
        header("Location: dashbordUser.php"); //redirect
        //hieronder kan je geen cookies plaatsen omdat je al weggestuurd bent naar de nieuwe pagina 
    }
    else{
        $error = true;
    }

} // hier werkt iss





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>login</title>
</head>
<body>
    <img class="vormpje" src="./media/vorm.png" alt="vormpje">
    <img class="logo" src="./media/logo-zwart.png" alt="logo Conneco">
    
    <!- <img class="logo" src="./media/logo-zwart.png" alt="Logo Conneco"> --

    <form class="form-login" method="post" > <!- Form for logging in / HIER STOND EEN ACTION MET PHP CODE --
       
        <div class="input-login">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" value="" required />

          <label for="password">Wachtwoord</label>
          <input type="password" id="password" name="password" required />
        </div>

        <a href="resetPassword.php"> Wachtwoord vergeten?</a>
        <button type="submit" class="btn">Inloggen</button>

        <a class="register" href="signup.php">Heb je nog geen account? Registreer je dan hier.</a>
    </form>
</body>
</html> -->

<?php
	/*$error="";*/
	//var_dump($_POST); //zo check je ook of er op de verzend button geklikt is want er is geen on click meer, array is dan gevuld
	//echo md5() hashen -> opzoeken
	//als ze je cookie hebben, hebben ze je sessie
	//eens een hacker de salt gokt die niet goed beveiligd is, heeft de hacker toegang tot alle accounts op die site
	include_once("functions.inc.php");

	if(!empty($_POST)){ //werkt als de form gepost is
		$username=$_POST["email"]; //want name email gegeven onderaan
		$password= $_POST["password"]; //want name password gegeven onderaan
		
		if(canLogin($username, $password)){ //in functie parameters die enkel in functie staan, w nu ingevuld met variabelen hierboven
			/*dit is de cookie manier cookie leeft op client side:
			$salt="85123KJHG85";
			$cookieValue = $username . "," . md5($username.$salt); //om te weten wie was aangemeld //komma om te scheiden
			//zonder de salt hierachter zou het te makkelijk te raden zijn
			setCookie("loggedin", $cookieValue, time()+60*60*24*7); //cookies boven redirect zetten!!*/ //true is hier 1, normaal is het beter om string mee te geven //time + week
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
			<form action="" method="post"> <!--action is naar welke pagina het gestuurd wordt, als je lege string doet blijft het de pagina waarop je aan het coderen bent-->
			<!--als je niets aan method zou meegeven is het get-->
			<!--post veel veiliger, denk aan ww en paswoorden want niet in url te zien -> je geraakt er ook niet aan via var dump get (wel var dump post)-->
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
