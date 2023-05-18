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
    
    <!-- <img class="logo" src="./media/logo-zwart.png" alt="Logo Conneco"> -->

    <form class="form-login" method="post" > <!-- Form for logging in / HIER STOND EEN ACTION MET PHP CODE -->
       
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
</html>