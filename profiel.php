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
                    <a href="dashboard.php"><P>Dashboard</P></a> 
                    <a href="werknemers.php"><p>Werknemers</p></a>
                    <a href="categoriën.php"><p>Categorieën</p></a>
                    <a href="profiel.php"><p>Profiel</p></a>
                    <a href="badges.php"><p>Badges</p></a>
                    <a href="instellingen.php"><p>Instellingen</p></a>
                </div>
            </div>
            
            <div class="main">
                <div class="header search">
                    <div id="menu">
                        <a href="searchAdmin.php"><input></a>
                    </div>
                </div>
                
                <!-- hier moet php code in om de naam van het project weer te geven -->
            
                <div class="content-instellingen">
                    <div class="column-instellingen">
                        <h3>Voornaam<h3>
                        <input type="text" id="voornaam" name="voornaam" value="" required />
                
                        <h3>Functie<h3>
                        <input type="text" id="funtie" name="funtie" value="" required />

                        <h3>Afdeling<h3>
                        <input type="text" id="afdeling" name="afdeling" value="" required />
                
                        <h3>In dienst sinds<h3>
                        <input type="text" id="inDienst" name="inDienst" value="" required />
                
                        <h3>Bio<h3>
                        <input type="text" id="bio" name="bio" value="" required />
                    </div>
                </div>
                
                <div class="profielf"><img src="./media/julie.png" alt="profielfoto"></div>
                <div class="btns"><a href="profielBewerkenAdmin.php">Bewerken</a></div>
                <div class="button"><a href="skillsAdmin.php">Mijn skills</a></div>

                <div class="column-profiel">
                    <div class="tags">
                        <h3>Tags</h3>
                        <p>Klantvriendelijkheid</p>
                        <p>Administratief</p>
                        <p>Microsoft Office</p>
                        <p>Taalvaardigheid</p>
                    </div>
                    
                    <div class="certificaten">
                        <h3>Certificaten</h3>
                        <p>Bachelor Bedrijfskunde</p>
                        <p>Workshop Communicatie</p>
                        <p>Bijscholing Microsoft Office</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


































<!-- <!DOCTYPE html>
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
                    <a href="dashboard.php"><P>Dashboard</P></a> 
                    <a href="werknemers.php"><p>Werknemers</p></a>
                    <a href="categoriën.php"><p>Categorieën</p></a>
                    <a href="profiel.php"><p>Profiel</p></a>
                    <a href="badges.php"><p>Badges</p></a>
                    <a href="instellingen.php"><p>Instellingen</p></a>
                </div>
            </div>
            
            <div class="main">
            <div class="header search">
                <div id="menuutje">
                    <a href="searchAdmin.php"><input></a>
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
            <div class="Btn"><a href="profielBewerkenAdmin.php">Bewerken</a></div>
            <div class="Btn"><a href="skillsAdmin.php">Mijn skills</a></div>
        </div>
    </body>
</html> -->