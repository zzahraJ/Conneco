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
                    <a href="search.php">Zoeken</a>
                    <input type="text" name="search" placeholder="Zoeken">
                </div>
            </div>
            
            <!-- hier moet php code in om de naam van het project weer te geven -->
           
            <div class="info-profiel">
                <h3>Voornaam<h3>
                <input type="text" id="voornaam" name="voornaam" value="" required />
        
                <h3>Functie<h3>
                <input type="text" id="functie" name="functie" value="" required />
        
                <h3>Afdeling<h3>
                <input type="text" id="afdeling" name="afdeling" value="" required />
        
                <h3>In dienst sinds<h3>
                <input type="text" id="InDienst" name="inDienst" value="" required />
        
                <h3>Bio<h3>
                <input type="text" id="bio" name="bio" value="" required />
            </div>

            <div class="profielfoto"><img src="./media/julie.png" alt="profielfoto"></div>
            <div class="bewerken"><a href="profielBewerken.php">Bewerken</a></div>
            <div class="bewerken"><a href="logout.php">Uitloggen</a></div> 

            <div class="tags">
                <p>Klantvriedelijkheid</p>
                <p>Administratief</p>
                <p>Microsoft Office</p>
                <p>Taalvaardigheid</p>
            </div>

            <div class="certificaten">
                <p>Bachelor Bedrijfskunde</p>
                <p>Workshop Communicatie</p>
                <p>Bijscholing Microsoft Office</p>
            </div>

            <div class="bewerken"><a href="skills.php">Mijn skills</a></div> 

          
        </div>






</body>
</html>