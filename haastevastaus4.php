<?php
//////
// Ohjelmointiputkan PHP-haasteen 4. tehtävän vastaus.
// Tuhertanut: Kare Salo

// Luvut annetaan muodossa: luku|luku|luku|... joten käytetään explode-funktiota
// jotta saataisiin kivasti luvut eroteltua.

$valimerkki = "|";
$lukujono = explode($valimerkki,$_REQUEST['luvut']);

//Tämän jälkeen lasketaan luvut yhteen foreachilla.
$summa = 0;
foreach($lukujono as $luku)
{
	$summa += $luku;
}
echo $summa;

?>