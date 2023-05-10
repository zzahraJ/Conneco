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
        </div>
    </nav>

    <div class="image-container">
        <img class="row" src="./media/Blauwe-balk.png" alt="blauwe balk">
        <img class="logo-wit" src="./media/logo-wit.png" alt="Logo Conneco">
    </div>

    <div class="nav-container">
        <a href="dashboard.php"><h2>Dashboard</h2></a> 
        <a href="werknemers.php"><h2>Werknemers</h2></a>
        <a href="categorieën.php"><h2>Categorieën</h2></a>
        <a href="Badges.php"><h2>Badges</h2></a>
        <a href="Profiel.php"><h2>Profiel</h2></a>
        <a href="Instellingen.php"><h2>Instellingen</h2></a>
    </div>


    <div class="info-profiel">
        <h2>Voornaam<h2>
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