<?php
###
# Ohjelmointiputkan PHP-haasteen 32. tehtävän vastaus.
# Tuhertanut: Kare Salo
###
# Jos ton $kirjaimet lukujonon key-arvoja vertais kirjainjoukkoon, kattois et onko n ja n+1 $kirjaimet-lukujonon key-arvon ero >1
// Käytössä ovat kirjaimet A–Z, ja kirjainjoukossa on enintään sata kirjainta.
$kirjaimet = str_split("ABCDEFGHIJKLMNOPQRSTUVWXYZ", 1);
// array_flip-funktiolla saadaan kivasti arvot ja avaimet vaihdettua.
$kirjaimet = array_flip($kirjaimet);
// Annettu kirjainjoukko laitetaan aakkosjärjestykseen.
$kirjainjoukko = str_split($_REQUEST['kirj'], 1);
$kirjainjoukko = array_unique($kirjainjoukko, SORT_STRING);
sort($kirjainjoukko, SORT_REGULAR);
// luodaan heti ansa jos on yhden kirjaimen pituinen kirjainjoukko
if(count($kirjainjoukko) == 1)
{
	print $kirjainjoukko[0];
}
else
{
	foreach($kirjainjoukko as $arvo => $kirjain) {

		// Yksi jossa katsotaan onko tämän hetkisen kirjaimen seuraava kirjain
		if($kirjain !== end($kirjainjoukko)) 
		{	
			// tarvitaan kolme if-tarkistusta
			// jos seuraava kirjain on aakkosissa seuraava, aloitetaan kirjainsarja
			if($kirjaimet[$kirjain]+1 == $kirjaimet[$kirjainjoukko[$arvo+1]] && !isset($kirjainsarja))
			{
				// luodaan muuttuja kirjainsarja jotta älytään että kirjainsarja on nyt tulossa
				$kirjainsarja = 1;
				print $kirjain;
			}
			// jos kirjainsarja on loppumassa, lopetetaan kirjainsarja (DUH!)
			elseif($kirjaimet[$kirjain]+1 !== $kirjaimet[$kirjainjoukko[$arvo+1]] && isset($kirjainsarja))
			{
				unset($kirjainsarja);
				print "-";
				print $kirjain;
				print ",";
			}
			// jos seuraava kirjain ei ole aakkosissa seuraava
			elseif($kirjaimet[$kirjain]+1 !== $kirjaimet[$kirjainjoukko[$arvo+1]] && !isset($kirjainsarja))
			{
				print $kirjain;
				print ",";
			}
		}
		// Jos ollaan vikassa kirjaimessa ja edellinen kirjain sopis kirjain sarjaan
		elseif($kirjain == end($kirjainjoukko) && $kirjaimet[$kirjain]-1 == $kirjaimet[$kirjainjoukko[$arvo-1]])
		{
			print "-";
			print $kirjain;
		} 
		// Sama juttu paitsi jos edellinen kirjain ei sopis kirjain sarjaan
		else
		{
			print $kirjain;
		} 
	}
}
?>