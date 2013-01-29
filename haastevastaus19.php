<?php
//////
// Ohjelmointiputkan PHP-haasteen 19. tehtävän vastaus.
// Tuhertanut: Kare Salo
//////
//Tehtävänä on selvittää, onko annetun kokonaisluvun neliöjuuri kokonaisluku. 
//Voit olettaa, että luku on korkeintaan miljardi.
//Jos luvun neliöjuuri on kokonaisluku, skriptin täytyy tulostaa luku 1. Muuten skriptin täytyy tulostaa luku 0.
////
//Otetaan annetusta luvusta neliöjuuri
$luku = sqrt($_REQUEST['luku']);
//Annetaan $about muuttujalle $luku-muuttujan pyöristetty arvo 
$about = floor($luku);
//Sitten katotaan onko $about ja $luku IHAN SAMOJA
if($luku == $about)
{ echo "1";}
else
{ echo "0";}
?>