<?php
//////
// Ohjelmointiputkan PHP-haasteen 29. teht�v�n vastaus.
// Tuhertanut: Kare Salo
//////
// Tarkastellaan seuraavaa algoritmia:

// A. Valitaan jokin kokonaisluku n.
// B. Jos n on parillinen, jaetaan se kahdella. Jos taas n on pariton, kerrotaan se kolmella ja lis�t��n tulokseen yksi.
// C. Jos n on yksi, lopetetaan. Muuten palataan kohtaan B.
// Teht�v�n� on selvitt�� annetulla n:n arvolla, kuinka monta kertaa algoritmi suorittaa vaiheen B. 
// Voit olettaa, ett� algoritmi suorittaa vaiheen B korkeintaan tuhat kertaa ja n on joka vaiheessa korkeintaan miljardi.
// $_REQUEST['n']: n:n aloitusarvo
/////
// Skriptin t�ytyy tulostaa algoritmin vaiheen B suorituskertojen m��r�.

// Alustetaan B-vaiheen laskuri
$i = 0;

// Py�ritet��n silmukkaa kunnes luku on 1
// Otetaan nyt toi et alle 2000 kertaa, mut todellisessa maailmassa tollasia rajoituksia ei ehk� kandeis olla.
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
	// Ja se kerrotaan kolmella ja siihen lis�t��n 1
	$_REQUEST['n'] = $_REQUEST['n']*3+1;
	$i++;
	}
// Jos luku on 1 t�ss� vaiheessa, lopetetaan t�m� silmukka
	if($_REQUEST['n'] < 2)
	{ 
	print $i;
	die(); 
	}

}

?>