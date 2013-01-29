<?php
//////
// Ohjelmointiputkan PHP-haasteen 21. teht�v�n vastaus.
// Tuhertanut: Kare Salo
//////
// Kalle kirjoittaa kokonaisluvut 1:st� lukuun n. Kuinka monta kertaa Kalle kirjoittaa kunkin numeron? 
// Voit olettaa, ett� n on korkeintaan 1000. Esimerkiksi jos n on 15, Kalle kirjoittaa luvut 1, 2, 3, ..., 15. 
// Kalle kirjoittaa siis kahdeksan kertaa numeron 1, kaksi kertaa numerot 2, 3, 4 ja 5 sek� kerran numerot 0, 6, 7, 8 ja 9.
// Skriptin t�ytyy tulostaa kymmenen lukua, jotka tarkoittavat numeroiden 0, 1, 2, ..., 9 kirjoituskertoja.
//////
$n = $_REQUEST['n'];

//Luetellaan numerot 0-9 ja tehd�n niist� avaimet lukujonoon.
for($g = 0; $g<10; $g++)
{
$luvut[$g] = 0;
}

//Sit varmaan pit�s luetella numerot jotka on n:een asti kirjoitettu.
for($r=1; $r<=$n; $r++) { $numerot[] = $r; }

//Ja sit t�ytyy teh� jotain tosi h�lm�, eli ensin imploadaa toi numerot-lukujono
$numerokasa = implode($numerot);
//Sitten str_split funktiolla teh� siit� taas lukujono mut nyt niin et jokainen numero on erikseen.
$numberpile = str_split($numerokasa);

//Ja sitten laskea ett� montako kertaa tietty luku sitten mainitaan.
foreach($numberpile as $numero)
{
	$luvut[$numero]++;
}

foreach($luvut as $luku)
{
	print $luku." ";
}
?>