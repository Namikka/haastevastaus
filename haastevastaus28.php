<?php
//////
// Ohjelmointiputkan PHP-haasteen 27. teht�v�n vastaus.
// Tuhertanut: Kare Salo
//////
// Teht�v�n� on selvitt��, miten sana muuttuu, kun sit� kierret��n tietyn verran tiettyyn suuntaan. 
// Voit olettaa, ett� sanassa on korkeintaan sata kirjainta ja sit� kierret��n korkeintaan tuhat kertaa.
// Kun sanaa kierret��n vasemmalle, sen ensimm�inen kirjain siirtyy viimeiseksi. 
// Kun sanaa kierret��n oikealle, sen viimeinen kirjain siirtyy ensimm�iseksi.
// Esimerkiksi jos sanaa AVARUUS kierret��n kolmesti vasemmalle, lopputulos on RUUSAVA.
// $_REQUEST['sana']: kierrett�v� sana
// $_REQUEST['suunta']: kiertosuunta (V vasemmalle, O oikealle)
// $_REQUEST['maara']: kiertom��r�
/////
// Skriptin t�ytyy tulostaa kierron tuloksena oleva sana.
$sana = str_split($_REQUEST['sana']);

// Katsotaan ensin mihin suuntaan sanaa pit�� py�ritt��.
if($_REQUEST['suunta'] == "V")
{

	// Jos vasemmalle, siirret��n sanan eka kirjain vikaksi
	for($r=0; $r<$_REQUEST['maara']; $r++)
	{
	// Tuupataan eka kirjain vikaksi.
	array_push($sana, $sana[$r]);
	// Ja sen j�lkeen poistetaan alkuper�inen eka kirjain
	unset($sana[$r]);
	}

}

elseif($_REQUEST['suunta'] == "O")
{
	// Auttaisko t�t� jos tuon sanan eka k��nt�is v��rinp�in?
	
	// Jos oikealle, siirret��n sanan vika kirjain ekaksi
	for($r=0; $r<$_REQUEST['maara']; $r++)
	{
	// Siirret��n vika kirjain ekaksi
	array_unshift($sana, end($sana));
	// Ja poistetaan alkuper�inen vika kirjain.
	array_pop($sana);
	}
}

print implode($sana);
?>