<?php
###
# Ohjelmointiputkan PHP-haasteen 27. teht�v�n vastaus.
# Tuhertanut: Kare Salo
###
$sana1 = str_split($_REQUEST['sana1']);
$sana2 = str_split($_REQUEST['sana2']);
###
# Teht�v�n� on selvitt��, voiko sana1:sen muuttaa sana2:ksi poistamalla siit� kirjaimia. 
# J�ljelle j��vien kirjainten j�rjestys t�ytyy s�ilytt�� ennallaan.

#Kokeillaan similar_text funktiolla tota.
#Vittu ett� voi olla vaikeeta.

$a = similar_text($_REQUEST['sana2'], $_REQUEST['sana1']);

if($a == count($sana2))
{
print "1";
}
else
print "0";
?>