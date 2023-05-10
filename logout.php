<?php
/* cookie manier:
setCookie("loggedin", "", time()-3600); //je kan geen cookies deleten, je plaatst ze in het verleden*/
//time is altijd seconden sinds 1970
//cookies gelinkt aan browser dus geen problemen met de verschillende servers -> als je meerdere servers nodig hebt zoals tiktok en instagram moet je met cookies werken
//sessions gebruik je eerder voor kleine sites zoals smash van imd want niet druk gebruikt
session_start(); //session starten alvorens destroyen anders weet ding niet sessie van wie er gedestroyed moet worden
session_destroy(); 
header("Location: login.php");
?>