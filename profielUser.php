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
                
                <div class="content-instellingen">
                    <div class="column-instellingen">
                        <div class="profiel-info"> 
                            <h3>Naam</h3>
                            <input type="text" id="voornaam" name="voornaam" value="" required />

                            <h3>Functie</h3>
                            <input type="text" id="functie" name="functie" value="" required />

                            <h3>Afdeling</h3>
                            <input type="text" id="afdeling" name="afdeling" value="" required />

                            <h3>In dienst sinds</h3>
                            <input type="text" id="inDienst" name="inDienst" value="" required />

                            <h3>Bio</h3>
                            <input type="text" id="bio" name="bio" value="" required />
                        </div>
                            
                    <div class="column-profile"> 
                        <div class="tags">
                            <h3>Tags</h3>
                            <p>Klantvriendelijkheid</p>
                            <p>Administratief</p>
                            <p>Microsoft Office</p>
                        </div>
                        
                        <div class="certificaten">
                            <h3>Certificaten</h3>
                            <div class="column-users-container">
                                <div class="column-users">
                                    <p class="gebruikers-image"><img src="./media/puntje.png" alt="puntje">Bachelor Bedrijfskunde</p>
                                    <p class="gebruikers-image"><img src="./media/puntje.png" alt="puntje">Workshop Communicatie</p>
                                    <p class="gebruikers-image"><img src="./media/puntje.png" alt="puntje">Bijscholing Microsoft Office</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foto"><img src="./media/julie.png" alt="profielfoto"></div>
            <div class="Btn"><a href="profielBewerkenUser.php">Bewerken</a></div>
            <div class="Btn"><a href="skills.php">Mijn skills</a></div>
        </div>
    </body>
</html>