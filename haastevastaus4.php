<?php
//////
// Ohjelmointiputkan PHP-haasteen 4. teht�v�n vastaus.
// Tuhertanut: Kare Salo

// Luvut annetaan muodossa: luku|luku|luku|... joten k�ytet��n explode-funktiota
// jotta saataisiin kivasti luvut eroteltua.

$valimerkki = "|";
$lukujono = explode($valimerkki,$_REQUEST['luvut']);

//T�m�n j�lkeen lasketaan luvut yhteen foreachilla.
$summa = 0;
foreach($lukujono as $luku)
{
	$summa += $luku;
}
echo $summa;

?>