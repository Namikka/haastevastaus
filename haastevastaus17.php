<?php
//////
// Ohjelmointiputkan PHP-haasteen 17. tehtävän vastaus.
// Tuhertanut: Kare Salo
//////
//Tehtävässä annetaan jossain järjestyksessä kaikki luvut väliltä 1–n yhtä lukuun ottamatta, ja tarkoitus on selvittää, 
//mikä luku puuttuu. Voit olettaa, että n on korkeintaan 1000 ja jokainen luku annetaan vain kerran.
//////
//$_REQUEST['n']: lukujen määrä
//$_REQUEST['luvut']: luvut pystyviivoin erotettuina
//Skriptin täytyy tulostaa puuttuva luku.
//////
//Mennään taas lukujonoilla.
$n = $_REQUEST['n'];
$luvut = explode("|", $_REQUEST['luvut']);
//Sit taas laskuri
$a = 1;

//Ensin tehdään lukujono $suora, jossa arvoina on luvu 1-$n
while($a<=$n)
{
	$suora[] = $a;
	$a++;
}

//Sitten verrataan mikä arvo puuttuu annetusta lukujonosta
$puuttuva = array_diff($suora, $luvut);
foreach($puuttuva as $luku)
{
	echo $luku;
}

?>