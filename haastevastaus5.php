<?php
//////
// Ohjelmointiputkan PHP-haasteen 4. teht�v�n vastaus.
// Tuhertanut: Kare Salo

// Luvut annetaan muodossa: luku|luku|luku|... joten k�ytet��n explode-funktiota
// jotta saataisiin kivasti luvut eroteltua. Skriptin t�ytyy tulostaa pienin ja suurin luku.
$valimerkki = "|";
$lukujono = explode($valimerkki,$_REQUEST['luvut']);

// Tulostetaan ensin pienin luku
print min($lukujono);
print " ";
// ja suurin luku

print max($lukujono);
?>