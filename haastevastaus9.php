<?php
//////
// Ohjelmointiputkan PHP-haasteen 9. teht�v�n vastaus.
// Tuhertanut: Kare Salo
// Jaetaan sana ensin lukujonoksi.
$sana = str_split($_REQUEST['sana']);
// Koska en l�yt�nyt mit��n kivaa funktiota, joudun tekem��n lukujonoja.
// Vokaalijono on joukko sanan per�kk�isi� vokaaleita. Sanan PUUAINES pisin vokaalijono on UUAI.
// Teht�v�n� on selvitt��, kuinka pitk� on annetun sanan pisin vokaalijono. 

$vokaalit = array("a","e","i","o","u","y","�","�","�","A","E","I","O","U","Y","�","�","�");
$kokosana = count($sana);
// Alustetaan pituus ja suurin muuttujat
$pituus = 0;
$suurin = 0;
// Aloitetaan vokaalinumeroiden laskeminen.
foreach($sana as $kirjain)
{
	if(in_array($kirjain, $vokaalit))
	{
	// Mik�li kirjain on vokaali, lis�t��n pituus muuttujaan 1
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