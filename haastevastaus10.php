<?php
//////
// Ohjelmointiputkan PHP-haasteen 11. teht�v�n vastaus.
// Tuhertanut: Kare Salo
// Teht�v�n� on tulostaa kertotaulu, jossa vasen sarake sis�lt�� luvut 1�n ja ylin rivi sis�lt�� luvut 1�m. Voit olettaa, ett� kertotaulussa on korkeintaan tuhat lukua.

//Ensin muutetaan luku kivemmaksi muuttujaksi.
$luku = $_REQUEST['n'];

//Sitten otetaan laskuriluku jota k�ytet��n kertoman laskemisessa sek� tulosluku.
$tulos = $kertoma = 1;

while ($tulos<=$luku)
{
	$kertoma = $kertoma * $tulos;
	$tulos++;
}
print $kertoma;
?>
