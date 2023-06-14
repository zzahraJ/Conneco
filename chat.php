<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Chat</title>
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
                    
                    <div class="mensenZoeken"> 
                        <div id="zoeken">
                            <input type="text" name="search" placeholder="Zoeken">
                        </div>

                        <div class="chat-list">
                            <div class="chat-item" >
                                <div class="gebruikers-image"><img src="./media/julie.png" alt="foto">Sarah Verbot</div>
                                <div class="chat-info">
                                <div class="status">Online</div>
                                </div>
                            </div>

                            <div class="chat-item" >
                                <div class="gebruikers-image"><img src="./media/thomas.png" alt="foto">Thomas Peeters</div>
                                <div class="chat-info">
                                <div class="status">Online</div>
                                </div>
                            </div>

                            <div class="chat-item" >
                                <div class="gebruikers-image"><img src="./media/thomas.png" alt="foto">Lucas Wouters</div>
                                <div class="chat-info">
                                <div class="status">Online</div>
                                </div>
                            </div>

                            <div class="chat-item" >
                                <div class="gebruikers-image"><img src="./media/julie.png" alt="foto">Laura Smout</div>
                                <div class="chat-info">
                                <div class="status">Online</div>
                                </div>
                            </div>

                            <div class="chat-item" >
                                <div class="gebruikers-image"><img src="./media/thomas.png" alt="foto">Robin Smedts</div>
                                <div class="chat-info">
                                <div class="status">Online</div>
                                </div>
                            </div>


                            <div class="chat-item" >
                                <div class="gebruikers-image"><img src="./media/thomas.png" alt="foto">Jonas Van Damme</div>
                                <div class="chat-info">
                                <div class="status">Online</div>
                                </div>
                            </div>


                            <div class="chat-item" >
                                <div class="gebruikers-image"><img src="./media/julie.png" alt="foto">Lisa Albrechts</div>
                                <div class="chat-info">
                                <div class="status">Online</div>
                                </div>
                            </div>


                            <div class="chat-item" >
                                <div class="gebruikers-image"><img src="./media/julie.png" alt="foto">Jill Vinck</div>
                                <div class="chat-info">
                                <div class="status">Online</div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="column">
                    <div class="column-text-container ">
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
                            <button>Verzend</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>