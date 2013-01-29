<?php
//////
// Ohjelmointiputkan PHP-haasteen 11. teht�v�n vastaus.
// Tuhertanut: Kare Salo
// Lukujen 5, 3, 8, 2, 5, 7 ja 1 joukossa on kaksi kertaa sama luku, nimitt�in luku 5. Teht�v�n� on tutkia, onko lukujoukossa monta kertaa sama luku. Voit olettaa, ett� lukuja on korkeintaan 100 ja ne ovat kokonaislukuja v�lill� 0�1000000.
$luvut = explode("|", $_REQUEST['luvut']);

//Tehd��n uniikki lukujono johon on karsittu yksil�lliset luvut annetusta lukujonosta.
$uniikki = array_unique($luvut);

//Jos jokin luku esiintyy useasti, tulostetaan yksi
if(count($uniikki) == count($luvut))
{
	echo 0;
}
else
echo 1;
?>
