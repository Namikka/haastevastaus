<?php
//////
// Ohjelmointiputkan PHP-haasteen 29. teht�v�n vastaus.
// Tuhertanut: Kare Salo
//////
// Teht�v�n� on selvitt��, saako sanan muutettua toiseksi kiert�m�ll� sit�. Esimerkiksi sanan AVARUUS saa muutettua sanaksi RUUSAVA 
// ja samoin sanan RUUSAVA saa muutettua sanaksi AVARUUS. 
// Kuitenkaan sanaa AVARUUS ei saa muutettua sanaksi VAURAUS.
// $_REQUEST['sana1']: ensimm�inen sana
// $_REQUEST['sana2']: toinen sana
/////
// Skriptin t�ytyy tulostaa 1, jos sanan voi kiert�� toiseksi, ja muuten 0.

$annettu_sana = str_split($_REQUEST['sana1']);
$hakusana = $_REQUEST['sana2'];

//Koska on ihan sama mihin suuntaan py�ritet��n sanaa, py�ritet��n vaikka vasemmalle.
	for($r=0; $r<count($annettu_sana); $r++)
	{
	// Tuupataan eka kirjain vikaksi.
	array_push($annettu_sana, $annettu_sana[$r]);
	// Ja sen j�lkeen poistetaan alkuper�inen eka kirjain
	unset($annettu_sana[$r]);
	
		// Jos annettu_sana ON TASAN SAMA kuin hakusana, lopetetaan for-silmukka ja tulostetaan 1
		if(implode($annettu_sana) === $hakusana)
		{
		die("1");
		}
	}
// Jos silmukan j�lkeenk��n ei sanat t�sm��, tulosta 0
print "0";
?>