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

        <nav class="search">
            <div id="menu">
                <a href="search.php">Zoeken</a>
                <input type="text" name="search" placeholder="Zoeken">
            </div>
        </nav>

    <div class="image-container">
        <img class="row" src="./media/Blauwe-balk.png" alt="blauwe balk">
        <img class="logo-wit" src="./media/logo-wit.png" alt="Logo Conneco">
        
        <div class="lopende-projecten">
            <h2>Lopende Projecten</h2>
        </div>
    </div>

    <div class="nav-container">
        <a href="dashboard.php"><P>Dashboard</P></a> 
        <a href="werknemers.php"><p>Werknemers</p></a>
        <a href="categorieën.php"><p>Categorieën</p></a>
        <a href="badges.php"><p>Badges</p></a>
        <a href="profiel.php"><p>Profiel</p></a>
        <a href="instellingen.php"><p>Instellingen</p></a>
    </div>

   

    

    <div class="eigen-projecten">
        <h2>Eigen Projecten</h2>
    </div>

    <!-- hier moet php code in om de naam van het project weer te geven -->
    <div class="projecten">
        <div class="project"> 
            <h2>Project naam:</h2>
            <p>Geld te beschikking stellen voor klanten</p>  <!-- hier moet je php code schrijven -->
            <h2>Werknemers die hieraan werken:</h2>
            <p>Thomas Peeters    Julie De Vos    Mark Mezel</p> <!-- hier moet je php code schrijven -->
        </div>

        <div class="project"> 
            <h2>Project naam:</h2>
            <p>Geld te beschikking stellen voor klanten</p>  <!-- hier moet je php code schrijven -->
            <h2>Werknemers die hieraan werken:</h2>
            <p>Thomas Peeters    Julie De Vos    Mark Mezel</p> <!-- hier moet je php code schrijven -->
        </div>
    

        <div class="project"> 
            <h2>Project naam:</h2>
            <p>Geld te beschikking stellen voor klanten</p>  <!-- hier moet je php code schrijven -->
            <h2>Werknemers die hieraan werken:</h2>
            <p>Thomas Peeters    Julie De Vos    Mark Mezel</p> <!-- hier moet je php code schrijven -->
        </div>
    

        <div class="project"> 
            <h2>Project naam:</h2>
            <p>Geld te beschikking stellen voor klanten</p>  <!-- hier moet je php code schrijven -->
            <h2>Werknemers die hieraan werken:</h2>
            <p>Thomas Peeters    Julie De Vos    Mark Mezel</p> <!-- hier moet je php code schrijven -->
        </div>
    </div>
   
    <div class="deadlines">
        <h2>Volgende Deadline</h2>
        <h2>Werknemers die hieraan werken</h2>
    </div>
    
</body>
</html>