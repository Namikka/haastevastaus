<?php
###
# Ohjelmointiputkan PHP-haasteen 20. tehtävän vastaus.
# Tuhertanut: Kare Salo
###
#Tehtävänä on laskea n:s Fibonaccin luku. Voit olettaa, että vastaus on alle miljardi.
$n = $_REQUEST['n']-1;

#Alustetaan phi-muuttuja joka on tärkeä osa fibonaccin luvun lasku kaavaa.
$phi = ((1 + sqrt(5)) / 2);
$phineg = ((1 - sqrt(5)) / 2);

#Lasketaan n:s fibonaccin luku wikipediasta löydetyllä Binetin kaavalla.
#$tulos = pow($phi,$n)-pow(1-$phi,$n)/sqrt(5);
#Suomen wikipedian sivuilta löytynyt laskukaava
$tulos = 1/sqrt(5)*(pow($phi,$n)-pow($phineg,$n));

#Tulostetaan tulos
print $tulos;
?>