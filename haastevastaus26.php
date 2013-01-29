<?php
//////
// Ohjelmointiputkan PHP-haasteen 26. teht�v�n vastaus.
// Tuhertanut: Kare Salo
//////
// Sanan anagrammi saadaan j�rjest�m�ll� sanan kirjaimet uudestaan. Esimerkiksi sanan MIKROSEKUNTI anagrammi on SOINTUMERKKI. Teht�v�n� on tarkistaa, ovatko kaksi sanaa toistensa anagrammeja. Voit olettaa, ett� sanat muodostuvat kirjaimista A�Z ja kummassakin sanassa on korkeintaan 50 kirjainta.

// Sy�te

// $_REQUEST['sana1']: ensimm�inen sana
// $_REQUEST['sana2']: toinen sana

// Tulostus

// Jos sanat ovat anagrammeja, skriptin t�ytyy tulostaa luku 1. Muussa tapauksessa skriptin t�ytyy tulostaa luku 0.

$sana1 = str_split(strtoupper($_REQUEST['sana1']));
$sana2 = str_split(strtoupper($_REQUEST['sana2']));
// K�yd��n siis molemmat sanat l�pi, ja lasketaan montako kertaa jokin kirjain esiintyy.
$kirjaimet1 = array_count_values($sana1);
$kirjaimet2 = array_count_values($sana2);
// EI TOIMI sana1=OHJELMOINTIPUTKA&sana2=KOTIPIHAJENMULTA SY�TTEELL�
// Katsotaan mik� on erotus, tai oikeastaan etsit��n sit� erotusta.
$erotus =array_diff_assoc($kirjaimet1, $kirjaimet2);

// Tarkastetaan onko sanat saman pituisia ja l�ytyyk� samat kirjaimet.
if(count($sana1) == count($sana2) && count($erotus)<1)
{	
// Jos l�ytyy, on kyseess� anagrammi
print "1";
}
else
// Muuten ei.
print "0";
?>