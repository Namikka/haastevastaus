<?php
//////
// Ohjelmointiputkan PHP-haasteen 11. tehtävän vastaus.
// Tuhertanut: Kare Salo
// Tehtävänä on tulostaa kertotaulu, jossa vasen sarake sisältää luvut 1–n ja ylin rivi sisältää luvut 1–m. Voit olettaa, että kertotaulussa on korkeintaan tuhat lukua.

//Ensin muutetaan luku kivemmaksi muuttujaksi.
$luku = $_REQUEST['n'];

//Sitten otetaan laskuriluku jota käytetään kertoman laskemisessa sekä tulosluku.
$tulos = $kertoma = 1;

while ($tulos<=$luku)
{
	$kertoma = $kertoma * $tulos;
	$tulos++;
}
print $kertoma;
?>
