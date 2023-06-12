<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Chat</title>

        <nav class="search">
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
        
            <div class="mensenZoeken">
                    <div id="zoeken">
                        <input type="text" name="search" placeholder="Zoeken">
                    </div>
                <div class="column-chat-container">
                    <div class="column-users">
                        <p class="gebruikers-image"><img src="./media/julie.png" alt="foto">Sarah Verbot</p>
                        <p class="gebruikers-image"><img src="./media/thomas.png" alt="foto">Robin Gillis</p>
                        <p class="gebruikers-image"><img src="./media/julie.png" alt="foto">Laura Peeters</p>
                        <p class="gebruikers-image"><img src="./media/thomas.png" alt="foto">Lucas Janssens</p>
                    </div>

                    <div class="column-users">
                        <p class="gebruikers-image"><img src="./media/julie.png" alt="foto"></p>
                        <p class="gebruikers-image"><img src="./media/thomas.png" alt="foto"></p>
                        <p class="gebruikers-image"><img src="./media/julie.png" alt="foto"></p>
                        <p class="gebruikers-image"><img src="./media/thomas.png" alt="foto"></p>
                    </div>
                </div>
            </div>
            
            <div class="mensenChatten">
                    <div id="gesprek">
                        <input type="text">
                    </div>
                <div class="column-text-container">
                    <div class="column-text">
                
                        <div class="chat-container">
                            <div class="message-container">
                                <div class="message">Hey, ik heb een vraag over analyse. Kan jij mij helpen</div>
                                <div class="timestamp">9:07</div>
                            </div>
                            <div class="message-container1">
                                <div class="message1">Hey Thomas, wat is precies je vraag?</div>
                                <div class="timestamp">9:12</div>
                            </div>

                            <div class="message-container">
                                <div class="message">Het gaat over het dosier van KBC.</div>
                                <div class="timestamp">9:31</div>
                            </div>

                            <div class="message-container1">
                                <div class="message1">Ik heb straks wel even tijd, dan kunnen we samenzitten.</div>
                                <div class="timestamp">9:43</div>
                            </div>

                            <div class="message-container">
                                <div class="message">Super dank je wel</div>
                                <div class="timestamp">9:53</div>
                            </div>

                            <div class="message-container">
                                <div class="message">Wanneer kan je?</div>
                                <div class="timestamp">9:53</div>
                            </div>

                            <div class="message-container1">
                                <div class="message1">Rond 13 uur heb ik tijd.</div>
                                <div class="timestamp">10: 07</div>
                            </div>

                            <div class="message-container">
                                <div class="message">Top bedankt</div>
                                <div class="timestamp">9:53</div>
                            </div>
                        </div>

                        <div class="input-container">
                        <input type="text" placeholder="Type your message..." />
                        <button>Send</button>
                        </div>
                    </div>
                </div>
            </div>







            <!-- <div class="content">
                <div class="column">
                    <div class="personen"> 
                      
                        <div class="column-users">
                            <p class="gebruikers-image"><img src="./media/julie.png" alt="beker">Sarah Verbot</p>
                            <p class="gebruikers-image"><img src="./media/thomas.png" alt="beker">Robin Gillis</p>
                            <p class="gebruikers-image"><img src="./media/julie.png" alt="beker">Laura Peeters</p>
                            <p class="gebruikers-image"><img src="./media/thomas.png" alt="beker">Lucas Janssens</p>
                        </div>
                    </div>
                </div>

                <div class="content">
                        <h2></h2>
                        <div class="column-users-container">
                            <div class="column-users">
                                <p class="gebruikers-image"><img src="./media/julie.png" alt="beker">Sarah Verbot</p>
                                <input type="text" id="voornaam" name="voornaam" value="" required />
                            </div>
                        </div>
                    </div>
            </div> -->
        </div>
    </div>
    </body>
</html>