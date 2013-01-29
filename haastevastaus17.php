<?php
//////
// Ohjelmointiputkan PHP-haasteen 17. teht�v�n vastaus.
// Tuhertanut: Kare Salo
//////
//Teht�v�ss� annetaan jossain j�rjestyksess� kaikki luvut v�lilt� 1�n yht� lukuun ottamatta, ja tarkoitus on selvitt��, 
//mik� luku puuttuu. Voit olettaa, ett� n on korkeintaan 1000 ja jokainen luku annetaan vain kerran.
//////
//$_REQUEST['n']: lukujen m��r�
//$_REQUEST['luvut']: luvut pystyviivoin erotettuina
//Skriptin t�ytyy tulostaa puuttuva luku.
//////
//Menn��n taas lukujonoilla.
$n = $_REQUEST['n'];
$luvut = explode("|", $_REQUEST['luvut']);
//Sit taas laskuri
$a = 1;

//Ensin tehd��n lukujono $suora, jossa arvoina on luvu 1-$n
while($a<=$n)
{
	$suora[] = $a;
	$a++;
}

//Sitten verrataan mik� arvo puuttuu annetusta lukujonosta
$puuttuva = array_diff($suora, $luvut);
foreach($puuttuva as $luku)
{
	echo $luku;
}

?>