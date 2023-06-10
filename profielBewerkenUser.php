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
          <label for="naam">naam</label>
          <input type="text" id="naam" name="naam" value="Julie" required />

          <label for="functie">Functie</label>
          <input type="text" id="functie" name="functie" value="De Vos" required />

          <label for="afdeling">Afdeling</label>
          <input type="text" id="afdeling" name="afdeling" value="Q7 bureau 5" required />

          <label for="inDienst">In dienst sinds</label>
          <input type="text" id="inDienst" name="inDienst" value="Werknemers sinds 2019" required />

          <label for="bio">Bio</label>
          <input type="text" id="bio" name="bio" value="Een vrolijke 27-jarige" required />
        </div>

        <div class="Foto"><img src="./media/julie.png" alt="profielfoto"></div>
        <div class="bewerken"><a href="profielBewerkenUser.php">Bewerken</a></div>
        <div class="uitloggen"><a href="logout.php">Uitloggen</a></div>
        <!-- <button type="submit" class="btn">Bewerken</button> -->

        <div class="tags">
            <h2>Tags</h2>
            <ul>
                <li>Klantvriedelijkheid</li>
                <li>Administratief</li>
                <li>Microsoft Office</li>
                <li>Taalvaardigheid</li>
            </ul>
        </div>

        <div class="certificaten">
            <h2>Certificaten</h2>
            <ul>
                <li>Bachelor Bedrijfskunde</li>
                <li>Workshop Communicatie</li>
                <li>Bijscholing Microsoft Office</li>
            </ul>
        </div>

        
        <div class="skillsBtn"><a href="skills.php">Mijn skills</a></div>
</body>
</html>