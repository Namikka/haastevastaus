<?php
//////
// Ohjelmointiputkan PHP-haasteen 11. tehtävän vastaus.
// Tuhertanut: Kare Salo
// Tehtävänä on tulostaa kertotaulu, jossa vasen sarake sisältää luvut 1–n ja ylin rivi sisältää luvut 1–m. Voit olettaa, että kertotaulussa on korkeintaan tuhat lukua.

//Ensin muutetaan luvut kivemmaksi muuttujiksi.
$sarake = $_REQUEST['n'];
$rivi = $_REQUEST['m'];
//////
//Alustetaan laskurimuuttujat ja määritellään kuinka monta lukua yhteensä rivissä on
//Ensimmäisellä muuttujalla $a lasketaan kuinka monta lukua yhteensä on sarakkeessa.
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
	//Lisätään rivilaskimeen yksi, nollataan sarake ja rivilukulaskurit
	$i = 0;
	$a = 0;
	$g++;
	}
//Jos ei ole rivin verran tuotettu lukuja, lisätään sarake ja rivilaskuriin yksi.
$i++;
$a++;
}
?>
