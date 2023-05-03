<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registreren</title>
  <link rel="stylesheet" href="style.css"/>
</head>

<body>
 

  <div class="form">
    
  <img src="./media/oceaanblauw.png" alt="Logo Conneco">

     <div class="form-signup">
      <form method="post">

        <h3 class="text-signup">Vul hier je gegevens in.</h3>

        <div class="input-signup">
          <label for="firstname">Voornaam</label>
          <input type="text" id="firstname" name="firstname" value="" required />

          <label for="lastname">Achternaam</label>
          <input type="text" id="lastname" name="lastname" value="" required />

          <label for="email">Email</label>
          <input type="email" id="email" name="email" value="" required />

          <label for="password">Wachtwoord</label>
          <input type="password" id="password" name="password" required />
        </div>

        <input type="submit" value="Registreren" class="btn"/>
      </form>
    </div>
  </div>
</body>

</html>