<?php
//////
// Ohjelmointiputkan PHP-haasteen 11. teht�v�n vastaus.
// Tuhertanut: Kare Salo
// Teht�v�n� on tulostaa kertotaulu, jossa vasen sarake sis�lt�� luvut 1�n ja ylin rivi sis�lt�� luvut 1�m. Voit olettaa, ett� kertotaulussa on korkeintaan tuhat lukua.

//Ensin muutetaan luvut kivemmaksi muuttujiksi.
$sarake = $_REQUEST['n'];
$rivi = $_REQUEST['m'];
//////
//Alustetaan laskurimuuttujat ja m��ritell��n kuinka monta lukua yhteens� riviss� on
//Ensimm�isell� muuttujalla $a lasketaan kuinka monta lukua yhteens� on sarakkeessa.
//Toisella muuttujalla $i lasketaan montako lukua tuotetaan per rivi
//Kolmannella muuttujalla $g sit tulostetaan kerroin!
$a = $i = $g = 1;

while($a <= $rivi && $g <= $sarake)
{
//Tulostetaan 
echo $a*$g;
echo " ";
	if($i==$rivi)
	{
	//Jos on $rivin verran tulostettu numeroita, aloitetaan uusi rivi
	echo "<br>";
	//Lis�t��n rivilaskimeen yksi, nollataan sarake ja rivilukulaskurit
	$i = 0;
	$a = 0;
	$g++;
	}
//Jos ei ole rivin verran tuotettu lukuja, lis�t��n sarake ja rivilaskuriin yksi.
$i++;
$a++;
}
?>
