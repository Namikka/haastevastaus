<?php
###
# Ohjelmointiputkan PHP-haasteen 18. teht�v�n vastaus.
# Tuhertanut: Kare Salo
###
#Teht�v�n� on ilmoittaa kaikki sanassa olevat kirjaimet ja niiden esiintymism��r�t.
#Kirjaimet t�ytyy luetella aakkosj�rjestyksess�.
#Voit olettaa, ett� sana muodostuu kirjaimista A�Z ja siin� on korkeintaan 100 kirjainta.
###
#Annettu sana, joka samantien vedet��n kirjaimen pituisiksi paloiksi.
$sana = str_split($_REQUEST['sana']);
#Alustetaan laskuri
$tulos = array();
#Luetellaan kirjaimet.
foreach($sana as $kirjain)
{
#Jos kirjain EI esiinny jo lukujonossa, annetaan kirjaimen arvoksi 1
$h = 1;
	#Jos kirjain esiintyy jo $tulos lukujonossa, kerrotaan kirjaimen arvo yhdell�.
	if(array_key_exists($kirjain,$tulos))
	{
	$h = $tulos[$kirjain];
	$h++;
	}
#Tuupataan/p�ivitet��n kirjain lukujonoon niin ett� kirjain on lukujonon avain ja esiintymiskerta on arvo.
#Tehd��n n�inp�in koska kirjain on uniikki, esiintymiskerta ei.
$tulos[$kirjain] = $h;
}

#Sitten viel� pit�s tulostaa aakkosj�rjestyksess�, menee varmaan jollain sortilla tms.
ksort($tulos);
foreach($tulos as $key => $val)
{
print "$key $val<br>";
}
?>