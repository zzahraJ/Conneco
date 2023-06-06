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
        <a href="dashboard.php"><P>Dashboard</P></a> 
        <a href="werknemers.php"><p>Werknemers</p></a>
        <a href="categorieën.php"><p>Categorieën</p></a>
        <a href="badges.php"><p>Badges</p></a>
        <a href="profiel.php"><p>Profiel</p></a>
        <a href="instellingen.php"><p>Instellingen</p></a>
    </div>
   

    <div class="info-profiel">
        <h2>oornaam<h2>
        <input type="email" id="email" name="email" value="Julie" required />
        <h2>Achternaam<h2>
        <input type="email" id="email" name="email" value="De Vos" required />
        <h2>Email adres<h2>
        <input type="email" id="email" name="email" value="julie.devos@gmail.com" required />
        <h2>Wachtwoord<h2>
        <input type="email" id="email" name="email" value="Kippenbout2023" required />
    </div>

    <div class="hexagon">
        <img src="./media/Julie.png" alt="Photo" class="hex-img">
    </div>

    <button type="submit" class="btn">Bewerken</button>

</body>
</html>