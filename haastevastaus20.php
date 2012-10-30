<?php
###
# Ohjelmointiputkan PHP-haasteen 20. teht�v�n vastaus.
# Tuhertanut: Kare Salo
###
#Teht�v�n� on laskea n:s Fibonaccin luku. Voit olettaa, ett� vastaus on alle miljardi.
$n = $_REQUEST['n']-1;

#Alustetaan phi-muuttuja joka on t�rke� osa fibonaccin luvun lasku kaavaa.
$phi = ((1 + sqrt(5)) / 2);
$phineg = ((1 - sqrt(5)) / 2);

#Lasketaan n:s fibonaccin luku wikipediasta l�ydetyll� Binetin kaavalla.
#$tulos = pow($phi,$n)-pow(1-$phi,$n)/sqrt(5);
#Suomen wikipedian sivuilta l�ytynyt laskukaava
$tulos = 1/sqrt(5)*(pow($phi,$n)-pow($phineg,$n));

#Tulostetaan tulos
print $tulos;
?>