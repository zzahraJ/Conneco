<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Dashboard</title>
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
            <div class="content">
                <div class="column">
                    <div class="lopende-projecten">
                        <h2>Lopende Projecten</h2>
                    </div>
                    
                    <div class="project"> 
                        <h3>Project naam:</h3>
                        <p>Geld te beschikking stellen voor klanten</p>  <!-- hier moet je php code schrijven -->
                        <h3>Werknemers die hieraan werken:</h3>
                        <p>Thomas Peeters    Julie De Vos    Mark Mezel</p> <!-- hier moet je php code schrijven -->
                    </div>
                    
                    <div class="project"> 
                        <h3>Project naam:</h3>
                        <p>Geld te beschikking stellen voor klanten</p>  <!-- hier moet je php code schrijven -->
                        <h3>Werknemers die hieraan werken:</h3>
                        <p>Thomas Peeters    Julie De Vos    Mark Mezel</p> <!-- hier moet je php code schrijven -->
                    </div>
                    
                    <div class="project"> 
                        <h3>Project naam:</h3>
                        <p>Geld te beschikking stellen voor klanten</p>  <!-- hier moet je php code schrijven -->
                        <h3>Werknemers die hieraan werken:</h3>
                        <p>Thomas Peeters    Julie De Vos    Mark Mezel</p> <!-- hier moet je php code schrijven -->
                    </div>
                    
                    <div class="project"> 
                        <h3>Project naam:</h3>
                        <p>Geld te beschikking stellen voor klanten</p>  <!-- hier moet je php code schrijven -->
                        <h3>Werknemers die hieraan werken:</h3>
                        <p>Thomas Peeters    Julie De Vos    Mark Mezel</p> <!-- hier moet je php code schrijven -->
                    </div>
                </div>
                <div class="column">
                    <div class="eigen-projecten">
                        <h2>Eigen Projecten</h2>
                    </div>
                    
                    <div class="deadlines">
                        <h3>Volgende Deadline</h3>
                        <p>Project Meuryl start 02/06/2023 - einde 20/06/2023</p>
                        <h3>Werknemers die hieraan werken</h3>
                        <p>Sarah Verbot (projectleider) Kurt Gins (krediet) Mark Mezel (administratief)</p>
                    </div>
                    
                    <div class="gebruikers">
                        <h2>Actieve gebruikers</h2>
                        <div class="column-users-container">
                            <div class="column-users">
                                <h3>Tuur Speer</h3>
                                <h3>Thomas Peeters</h3>
                                <h3>Patricia Derwaas</h3>
                                <h3>Jef Bertrant</h3>
                                <h3>Kurt Gins</h3>
                                <h3>Peter Segers</h3>
                                <h3>Ruben Vermaelen</h3>
                                <h3>Dina Vermina</h3>
                            </div>
                            <div class="column-users">
                                <p class="gebruikers-image"><img src="./media/beker.png" alt="beker">Expert</p>
                                <p class="gebruikers-image"><img src="./media/person-badge.png" alt="beker">Nieuwkomer</p>
                                <p class="gebruikers-image"><img src="./media/handen.png" alt="beker">Helper</p>
                                <p class="gebruikers-image"><img src="./media/schild.png" alt="beker">Actieve gebruiker</p>
                                <p class="gebruikers-image"><img src="./media/mannetjes.png" alt="beker">Mentor</p>
                                <p class="gebruikers-image"><img src="./media/beker.png" alt="beker">Expert</p>
                                <p class="gebruikers-image"><img src="./media/broche.png" alt="beker">Teamspeler</p>
                                <p class="gebruikers-image"><img src="./media/kroon.png" alt="beker">Vaardigheidskoning</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>