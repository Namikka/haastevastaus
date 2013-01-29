<?php
//////
// Ohjelmointiputkan PHP-haasteen 4. tehtävän vastaus.
// Tuhertanut: Kare Salo

// Luvut annetaan muodossa: luku|luku|luku|... joten käytetään explode-funktiota
// jotta saataisiin kivasti luvut eroteltua. Skriptin täytyy tulostaa pienin ja suurin luku.
$valimerkki = "|";
$lukujono = explode($valimerkki,$_REQUEST['luvut']);

// Tulostetaan ensin pienin luku
print min($lukujono);
print " ";
// ja suurin luku

print max($lukujono);
?>