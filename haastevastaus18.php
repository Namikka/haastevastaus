<?php
###
# Ohjelmointiputkan PHP-haasteen 18. tehtävän vastaus.
# Tuhertanut: Kare Salo
###
#Tehtävänä on ilmoittaa kaikki sanassa olevat kirjaimet ja niiden esiintymismäärät.
#Kirjaimet täytyy luetella aakkosjärjestyksessä.
#Voit olettaa, että sana muodostuu kirjaimista A–Z ja siinä on korkeintaan 100 kirjainta.
###
#Annettu sana, joka samantien vedetään kirjaimen pituisiksi paloiksi.
$sana = str_split($_REQUEST['sana']);
#Alustetaan laskuri
$tulos = array();
#Luetellaan kirjaimet.
foreach($sana as $kirjain)
{
#Jos kirjain EI esiinny jo lukujonossa, annetaan kirjaimen arvoksi 1
$h = 1;
	#Jos kirjain esiintyy jo $tulos lukujonossa, kerrotaan kirjaimen arvo yhdellä.
	if(array_key_exists($kirjain,$tulos))
	{
	$h = $tulos[$kirjain];
	$h++;
	}
#Tuupataan/päivitetään kirjain lukujonoon niin että kirjain on lukujonon avain ja esiintymiskerta on arvo.
#Tehdään näinpäin koska kirjain on uniikki, esiintymiskerta ei.
$tulos[$kirjain] = $h;
}

#Sitten vielä pitäs tulostaa aakkosjärjestyksessä, menee varmaan jollain sortilla tms.
ksort($tulos);
foreach($tulos as $key => $val)
{
print "$key $val<br>";
}
?>