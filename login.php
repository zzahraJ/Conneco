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
    <form class="form-login" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> <!-- Form for logging in -->
        <label for="email">Email</label>
        <input type="text" id="email" name="email">

        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        <a href="resetPassword.php"> Forgot Password?</a>
        <button type="submit" class="btn">Log In</button>
    </form>
</body>
</html>