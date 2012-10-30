<?php
###
# Ohjelmointiputkan PHP-haasteen 27. tehtävän vastaus.
# Tuhertanut: Kare Salo
###
$sana1 = str_split($_REQUEST['sana1']);
$sana2 = str_split($_REQUEST['sana2']);
###
# Tehtävänä on selvittää, voiko sana1:sen muuttaa sana2:ksi poistamalla siitä kirjaimia. 
# Jäljelle jäävien kirjainten järjestys täytyy säilyttää ennallaan.

#Kokeillaan similar_text funktiolla tota.
#Vittu että voi olla vaikeeta.

$a = similar_text($_REQUEST['sana2'], $_REQUEST['sana1']);

if($a == count($sana2))
{
print "1";
}
else
print "0";
?>