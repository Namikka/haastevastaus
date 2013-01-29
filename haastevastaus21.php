<?php
//////
// Ohjelmointiputkan PHP-haasteen 21. tehtävän vastaus.
// Tuhertanut: Kare Salo
//////
// Kalle kirjoittaa kokonaisluvut 1:stä lukuun n. Kuinka monta kertaa Kalle kirjoittaa kunkin numeron? 
// Voit olettaa, että n on korkeintaan 1000. Esimerkiksi jos n on 15, Kalle kirjoittaa luvut 1, 2, 3, ..., 15. 
// Kalle kirjoittaa siis kahdeksan kertaa numeron 1, kaksi kertaa numerot 2, 3, 4 ja 5 sekä kerran numerot 0, 6, 7, 8 ja 9.
// Skriptin täytyy tulostaa kymmenen lukua, jotka tarkoittavat numeroiden 0, 1, 2, ..., 9 kirjoituskertoja.
//////
$n = $_REQUEST['n'];

//Luetellaan numerot 0-9 ja tehdän niistä avaimet lukujonoon.
for($g = 0; $g<10; $g++)
{
$luvut[$g] = 0;
}

//Sit varmaan pitäs luetella numerot jotka on n:een asti kirjoitettu.
for($r=1; $r<=$n; $r++) { $numerot[] = $r; }

//Ja sit täytyy tehä jotain tosi hölmö, eli ensin imploadaa toi numerot-lukujono
$numerokasa = implode($numerot);
//Sitten str_split funktiolla tehä siitä taas lukujono mut nyt niin et jokainen numero on erikseen.
$numberpile = str_split($numerokasa);

//Ja sitten laskea että montako kertaa tietty luku sitten mainitaan.
foreach($numberpile as $numero)
{
	$luvut[$numero]++;
}

foreach($luvut as $luku)
{
	print $luku." ";
}
?>