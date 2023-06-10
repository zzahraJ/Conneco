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
