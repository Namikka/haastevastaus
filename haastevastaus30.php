<?php
//////
// Ohjelmointiputkan PHP-haasteen 29. tehtävän vastaus.
// Tuhertanut: Kare Salo
//////
// Tarkastellaan seuraavaa algoritmia:

// A. Valitaan jokin kokonaisluku n.
// B. Jos n on parillinen, jaetaan se kahdella. Jos taas n on pariton, kerrotaan se kolmella ja lisätään tulokseen yksi.
// C. Jos n on yksi, lopetetaan. Muuten palataan kohtaan B.
// Tehtävänä on selvittää annetulla n:n arvolla, kuinka monta kertaa algoritmi suorittaa vaiheen B. 
// Voit olettaa, että algoritmi suorittaa vaiheen B korkeintaan tuhat kertaa ja n on joka vaiheessa korkeintaan miljardi.
// $_REQUEST['n']: n:n aloitusarvo
/////
// Skriptin täytyy tulostaa algoritmin vaiheen B suorituskertojen määrä.

// Alustetaan B-vaiheen laskuri
$i = 0;

// Pyöritetään silmukkaa kunnes luku on 1
// Otetaan nyt toi et alle 2000 kertaa, mut todellisessa maailmassa tollasia rajoituksia ei ehkä kandeis olla.
for($r=0; $r<2000; $r++)
{
	// Jos luku on parillinen...
	if(is_integer($_REQUEST['n']/2))
	{
	// ...jaetaan se kahdella
	$_REQUEST['n'] = $_REQUEST['n']/2;
	$i++;
	}
	// Muuten luku onkin pariton..
	else
	{
	// Ja se kerrotaan kolmella ja siihen lisätään 1
	$_REQUEST['n'] = $_REQUEST['n']*3+1;
	$i++;
	}
// Jos luku on 1 tässä vaiheessa, lopetetaan tämä silmukka
	if($_REQUEST['n'] < 2)
	{ 
	print $i;
	die(); 
	}

}

?>