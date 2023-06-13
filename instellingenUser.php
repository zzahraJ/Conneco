<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Instellingen</title>
</head>
   <body>
    <div class="body-content">  
        <div class="sidebar">
            <div class="image-container">
                <img class="logo-wit" src="./media/logo-wit.png" alt="Logo Conneco">
            </div>
            
            <div class="nav-container">
                <a href="dashboardUser.php"><P>Dashboard</P></a> 
                <a href="chat.php"><p>Chat</p></a>
                <a href="profielUser.php"><p>Profiel</p></a>
                <a href="badgesUser.php"><p>Badges</p></a>
                <a href="instellingenUser.php"><p>Instellingen</p></a>
            </div>
        </div>
        
        <div class="main">
            <div class="header search">
                <div id="menu">
                    <a href="search.php"><input></a>
                </div>
            </div>
            <!-- hier moet php code in om de naam van het project weer te geven -->
            <div class="content-instellingen">
                <div class="column-instellingen">
                    <h3>Voornaam<h3>
                    <input type="text" id="voornaam" name="voornaam" value="" required />
            
                    <h3>Achternaam<h3>
                    <input type="text" id="achternaam" name="achternaam" value="" required />
            
                    <h3>Email adres<h3>
                    <input type="text" id="emailAdres" name="emailAdres" value="" required />
            
                    <h3>Wachtwoord<h3>
                    <input type="text" id="wachtwoord" name="wachtwoord" value="" required />
                </div>
            </div>

            <div class="profielfoto"><img src="./media/julie.png" alt="profielfoto"></div>
            <div class="Btn"><a href="instellingenBewerkenUser.php">Bewerken</a></div>
            <div class="Btn"><a href="login.php">Account verwijderen</a></div>
        </div>
    </div>  
  </body>
</html>