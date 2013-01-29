<?php
//////
// Ohjelmointiputkan PHP-haasteen 26. tehtävän vastaus.
// Tuhertanut: Kare Salo
//////
// Sanan anagrammi saadaan järjestämällä sanan kirjaimet uudestaan. Esimerkiksi sanan MIKROSEKUNTI anagrammi on SOINTUMERKKI. Tehtävänä on tarkistaa, ovatko kaksi sanaa toistensa anagrammeja. Voit olettaa, että sanat muodostuvat kirjaimista A–Z ja kummassakin sanassa on korkeintaan 50 kirjainta.

// Syöte

// $_REQUEST['sana1']: ensimmäinen sana
// $_REQUEST['sana2']: toinen sana

// Tulostus

// Jos sanat ovat anagrammeja, skriptin täytyy tulostaa luku 1. Muussa tapauksessa skriptin täytyy tulostaa luku 0.

$sana1 = str_split(strtoupper($_REQUEST['sana1']));
$sana2 = str_split(strtoupper($_REQUEST['sana2']));
// Käydään siis molemmat sanat läpi, ja lasketaan montako kertaa jokin kirjain esiintyy.
$kirjaimet1 = array_count_values($sana1);
$kirjaimet2 = array_count_values($sana2);
// EI TOIMI sana1=OHJELMOINTIPUTKA&sana2=KOTIPIHAJENMULTA SYÖTTEELLÄ
// Katsotaan mikä on erotus, tai oikeastaan etsitään sitä erotusta.
$erotus =array_diff_assoc($kirjaimet1, $kirjaimet2);

// Tarkastetaan onko sanat saman pituisia ja löytyykö samat kirjaimet.
if(count($sana1) == count($sana2) && count($erotus)<1)
{	
// Jos löytyy, on kyseessä anagrammi
print "1";
}
else
// Muuten ei.
print "0";
?>