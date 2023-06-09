<?php
    function canLogin($username, $password){
        if($username == "test0@thomasmore.be" && $password == "12345"){
            return true;
        }
        else {
            return false;
        }
    }

    if(!empty($_POST)){
      $username = $_POST['username'];
      $password = $_POST['password'];

      if(canLogin($username, $password)){
        session_start();
        $_SESSION['username'] = $username;
        header('Location: dashboardUser.php');
       
      }
      else {
        $error = "Username or password is incorrect";
      }

    }
?>

<header>
<link rel="stylesheet" href="style.css"/>  
</header>

<div id="app">
    <form action="login.php" method="post">
    
        <h1>Conneco</h1>
        <nav class="nav--login">
            <a href="#" id="tabLogin">Log in</a>
            <a href="#" id="tabSignIn">Sign up</a>
        </nav>
    
        <?php if(isset($error)): ?>
          <div class="alert">That password was incorrect. Please try again</div>
        <?php endif; ?>
    
        <div class="form form--login">
            <label for="username">Username</label>
            <input type="text" id="username" name="username">
        
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
        
        <div class="form form--signup hidden">
            <label for="username2">Username</label>
            <input type="text" id="username2">
        
            <label for="password2">Password</label>
            <input type="password" id="password2">
            
            <label for="email">Email</label>
            <input type="text" id="email">
        </div>
    
        <input type="submit" value="Inloggen" class="btn">
     </form>
</div>





<!-- <!DOCTYPE html>
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
    
    <img class="logo" src="./media/oceaanblauw.png" alt="Logo Conneco">

    <form class="form-login" method="post" > <!- Form for logging in / HIER STOND EEN ACTION MET PHP CODE -
       
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