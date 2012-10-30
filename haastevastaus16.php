<?php
###
# Ohjelmointiputkan PHP-haasteen 16. teht�v�n vastaus.
# Tuhertanut: Kare Salo
###
#Luvut 4, 7, 5, 9, ja 10 eiv�t ole j�rjestyksess�, koska luku 7 tulee ennen lukua 5. 
#Teht�v�n� on selvitt��, ovatko annetut luvut j�rjestyksess� pienimm�st� suurimpaan.
#Voit olettaa, ett� lukuja on korkeintaan sata ja luvut ovat positiivisia kokonaislukuja ja pienempi� kuin miljoona.
##Mmm, algoritmeja...
#$_REQUEST['luvut']: tutkittavat luvut pystyviivoin erotettuina
#Jos luvut ovat j�rjestyksess�, skriptin t�ytyy tulostaa 1. Muuten skriptin t�ytyy tulostaa 0.
#4|7|5|9|10|13
#Tehd��n taas lukujono, tosin kopioidaan sama lukujono my�s toiselle muuttujalle.
$jarjesta = $luvut = explode("|", $_REQUEST['luvut']);
#J�rjestet��n sort-funktiolla numerot j�rjestykseen.
sort($jarjesta,SORT_NUMERIC);

#Sort funktio on voimakas, joten vertaamme onko $jarjesta ja $luvut samoja

if($jarjesta !== $luvut)
{
echo "0";
}
else
echo "1";
?>