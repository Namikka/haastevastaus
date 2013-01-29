<?php
//////
// Ohjelmointiputkan PHP-haasteen 27. tehtävän vastaus.
// Tuhertanut: Kare Salo
//////
// Tehtävänä on selvittää, miten sana muuttuu, kun sitä kierretään tietyn verran tiettyyn suuntaan. 
// Voit olettaa, että sanassa on korkeintaan sata kirjainta ja sitä kierretään korkeintaan tuhat kertaa.
// Kun sanaa kierretään vasemmalle, sen ensimmäinen kirjain siirtyy viimeiseksi. 
// Kun sanaa kierretään oikealle, sen viimeinen kirjain siirtyy ensimmäiseksi.
// Esimerkiksi jos sanaa AVARUUS kierretään kolmesti vasemmalle, lopputulos on RUUSAVA.
// $_REQUEST['sana']: kierrettävä sana
// $_REQUEST['suunta']: kiertosuunta (V vasemmalle, O oikealle)
// $_REQUEST['maara']: kiertomäärä
/////
// Skriptin täytyy tulostaa kierron tuloksena oleva sana.
$sana = str_split($_REQUEST['sana']);

// Katsotaan ensin mihin suuntaan sanaa pitää pyörittää.
if($_REQUEST['suunta'] == "V")
{

	// Jos vasemmalle, siirretään sanan eka kirjain vikaksi
	for($r=0; $r<$_REQUEST['maara']; $r++)
	{
	// Tuupataan eka kirjain vikaksi.
	array_push($sana, $sana[$r]);
	// Ja sen jälkeen poistetaan alkuperäinen eka kirjain
	unset($sana[$r]);
	}

}

elseif($_REQUEST['suunta'] == "O")
{
	// Auttaisko tätä jos tuon sanan eka kääntäis väärinpäin?
	
	// Jos oikealle, siirretään sanan vika kirjain ekaksi
	for($r=0; $r<$_REQUEST['maara']; $r++)
	{
	// Siirretään vika kirjain ekaksi
	array_unshift($sana, end($sana));
	// Ja poistetaan alkuperäinen vika kirjain.
	array_pop($sana);
	}
}

print implode($sana);
?>