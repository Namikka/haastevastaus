<?php
//////
// Ohjelmointiputkan PHP-haasteen 19. teht�v�n vastaus.
// Tuhertanut: Kare Salo
//////
//Teht�v�n� on selvitt��, onko annetun kokonaisluvun neli�juuri kokonaisluku. 
//Voit olettaa, ett� luku on korkeintaan miljardi.
//Jos luvun neli�juuri on kokonaisluku, skriptin t�ytyy tulostaa luku 1. Muuten skriptin t�ytyy tulostaa luku 0.
////
//Otetaan annetusta luvusta neli�juuri
$luku = sqrt($_REQUEST['luku']);
//Annetaan $about muuttujalle $luku-muuttujan py�ristetty arvo 
$about = floor($luku);
//Sitten katotaan onko $about ja $luku IHAN SAMOJA
if($luku == $about)
{ echo "1";}
else
{ echo "0";}
?>