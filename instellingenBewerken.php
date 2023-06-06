<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Instellingen Bewerken</title>
</head>
    <body>
        <nav class="search">
            <div id="menu">
                <a href="search.php">Zoeken</a>
                <input type="text" name="search" placeholder="Zoeken">
            </div>
        </nav>

        <div class="image-container">
            <img class="row" src="./media/Blauwe-balk.png" alt="blauwe balk">
            <img class="logo-wit" src="./media/logo-wit.png" alt="Logo Conneco">
        </div>

        <div class="nav-container">
            <a href="dashboard.php"><P>Dashboard</P></a> 
            <a href="werknemers.php"><p>Werknemers</p></a>
            <a href="categorieën.php"><p>Categorieën</p></a>
            <a href="badges.php"><p>Badges</p></a>
            <a href="profiel.php"><p>Profiel</p></a>
            <a href="instellingen.php"><p>Instellingen</p></a>
        </div>
    
        <div class="omgedraaid-vormpje">
            <img src="./media/vorm-omgedraaid.png" alt="vormpje">
        </div>

        <div class="instellingen">
          <label for="firstname">Voornaam</label>
          <input type="text" id="firstname" name="firstname" value="" required />

          <label for="lastname">Achternaam</label>
          <input type="text" id="lastname" name="lastname" value="" required />

          <label for="email">Email</label>
          <input type="email" id="email" name="email" value="" required />

          <label for="password">Wachtwoord</label>
          <input type="password" id="password" name="password" required />

          <label for="password">Wachtwoord Wijzigen</label>
          <input type="password" id="password" name="password" required />
        </div>

        <div class="profielfoto"><img src="./media/julie.png" alt="profielfoto"></div>
        <div class="bewerken"><a href="instellingen.php">Opslaan</a></div>

    </body>
</html>