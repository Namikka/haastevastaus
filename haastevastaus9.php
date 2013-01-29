<?php
//////
// Ohjelmointiputkan PHP-haasteen 9. tehtävän vastaus.
// Tuhertanut: Kare Salo
// Jaetaan sana ensin lukujonoksi.
$sana = str_split($_REQUEST['sana']);
// Koska en löytänyt mitään kivaa funktiota, joudun tekemään lukujonoja.
// Vokaalijono on joukko sanan peräkkäisiä vokaaleita. Sanan PUUAINES pisin vokaalijono on UUAI.
// Tehtävänä on selvittää, kuinka pitkä on annetun sanan pisin vokaalijono. 

$vokaalit = array("a","e","i","o","u","y","ä","ö","å","A","E","I","O","U","Y","Ä","Ö","Å");
$kokosana = count($sana);
// Alustetaan pituus ja suurin muuttujat
$pituus = 0;
$suurin = 0;
// Aloitetaan vokaalinumeroiden laskeminen.
foreach($sana as $kirjain)
{
	if(in_array($kirjain, $vokaalit))
	{
	// Mikäli kirjain on vokaali, lisätään pituus muuttujaan 1
	$pituus++;
	//Sit if-lause, jossa suurin-muuttuja on pituus jos se on pienempi kuin $suurin.
		if($suurin<$pituus)
		{
		$suurin = $pituus;
		}
	}
	else
	//Ja jos ei ollut vokaali, niin nollataan pituus-muuttuja.
	{
	$pituus = 0;
	}
}

echo $suurin;
?>