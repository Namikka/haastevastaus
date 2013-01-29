<?php
//////
// Ohjelmointiputkan PHP-haasteen 11. tehtävän vastaus.
// Tuhertanut: Kare Salo
// Lukujen 5, 3, 8, 2, 5, 7 ja 1 joukossa on kaksi kertaa sama luku, nimittäin luku 5. Tehtävänä on tutkia, onko lukujoukossa monta kertaa sama luku. Voit olettaa, että lukuja on korkeintaan 100 ja ne ovat kokonaislukuja välillä 0–1000000.
$luvut = explode("|", $_REQUEST['luvut']);

//Tehdään uniikki lukujono johon on karsittu yksilölliset luvut annetusta lukujonosta.
$uniikki = array_unique($luvut);

//Jos jokin luku esiintyy useasti, tulostetaan yksi
if(count($uniikki) == count($luvut))
{
	echo 0;
}
else
echo 1;
?>
