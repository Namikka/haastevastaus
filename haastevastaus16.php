<?php
###
# Ohjelmointiputkan PHP-haasteen 16. tehtävän vastaus.
# Tuhertanut: Kare Salo
###
#Luvut 4, 7, 5, 9, ja 10 eivät ole järjestyksessä, koska luku 7 tulee ennen lukua 5. 
#Tehtävänä on selvittää, ovatko annetut luvut järjestyksessä pienimmästä suurimpaan.
#Voit olettaa, että lukuja on korkeintaan sata ja luvut ovat positiivisia kokonaislukuja ja pienempiä kuin miljoona.
##Mmm, algoritmeja...
#$_REQUEST['luvut']: tutkittavat luvut pystyviivoin erotettuina
#Jos luvut ovat järjestyksessä, skriptin täytyy tulostaa 1. Muuten skriptin täytyy tulostaa 0.
#4|7|5|9|10|13
#Tehdään taas lukujono, tosin kopioidaan sama lukujono myös toiselle muuttujalle.
$jarjesta = $luvut = explode("|", $_REQUEST['luvut']);
#Järjestetään sort-funktiolla numerot järjestykseen.
sort($jarjesta,SORT_NUMERIC);

#Sort funktio on voimakas, joten vertaamme onko $jarjesta ja $luvut samoja

if($jarjesta !== $luvut)
{
echo "0";
}
else
echo "1";
?>