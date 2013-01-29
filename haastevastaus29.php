<?php
//////
// Ohjelmointiputkan PHP-haasteen 29. tehtävän vastaus.
// Tuhertanut: Kare Salo
//////
// Tehtävänä on selvittää, saako sanan muutettua toiseksi kiertämällä sitä. Esimerkiksi sanan AVARUUS saa muutettua sanaksi RUUSAVA 
// ja samoin sanan RUUSAVA saa muutettua sanaksi AVARUUS. 
// Kuitenkaan sanaa AVARUUS ei saa muutettua sanaksi VAURAUS.
// $_REQUEST['sana1']: ensimmäinen sana
// $_REQUEST['sana2']: toinen sana
/////
// Skriptin täytyy tulostaa 1, jos sanan voi kiertää toiseksi, ja muuten 0.

$annettu_sana = str_split($_REQUEST['sana1']);
$hakusana = $_REQUEST['sana2'];

//Koska on ihan sama mihin suuntaan pyöritetään sanaa, pyöritetään vaikka vasemmalle.
	for($r=0; $r<count($annettu_sana); $r++)
	{
	// Tuupataan eka kirjain vikaksi.
	array_push($annettu_sana, $annettu_sana[$r]);
	// Ja sen jälkeen poistetaan alkuperäinen eka kirjain
	unset($annettu_sana[$r]);
	
		// Jos annettu_sana ON TASAN SAMA kuin hakusana, lopetetaan for-silmukka ja tulostetaan 1
		if(implode($annettu_sana) === $hakusana)
		{
		die("1");
		}
	}
// Jos silmukan jälkeenkään ei sanat täsmää, tulosta 0
print "0";
?>