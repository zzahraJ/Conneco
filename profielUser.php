<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>profiel</title>
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
            <a href="dashboardUser.php"><P>Dashboard</P></a> 
            <a href="chat.php"><p>Chat</p></a>
            <a href="profielUser.php"><p>Profiel</p></a>
            <a href="badgesUser.php"><p>Badges</p></a>
            <a href="instellingenUser.php"><p>Instellingen</p></a>
        </div>

        <div class="profiel">
          <label for="firstname">Voornaam</label>
          <input type="text" id="firstname" name="firstname" value="" required />

          <label for="functie">Functie</label>
          <input type="text" id="functie" name="functie" value="" required />

          <label for="afdeling">Afdeling</label>
          <input type="text" id="afdeling" name="afdeling" value="" required />

          <label for="inDienst">In dienst sinds</label>
          <input type="text" id="inDienst" name="inDienst" required />

          <label for="bio">Bio</label>
          <input type="text" id="bio" name="bio" required />
        </div>

        <div class="profielfoto"><img src="./media/julie.png" alt="profielfoto"></div>
        <div class="bewerken"><a href="instellingenBewerken.php">Bewerken</a></div>
        <div class="bewerken"><a href="logout.php">Uitloggen</a></div>


</body>
</html>