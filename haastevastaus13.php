<?php
###
# Ohjelmointiputkan PHP-haasteen 13. teht�v�n vastaus.
# Tuhertanut: Kare Salo
#Sana on palindromi, jos se on sama alusta loppuun ja lopusta alkuun luettuna. 
#Esimerkiksi sanat ENNE ja SYTYTYS ovat palindromeja. 
#Teht�v�n� on tarkistaa, onko annettu sana palindromi. 
#Voit olettaa, ett� sana muodostuu kirjaimista A�Z ja siin� on korkeintaan sata kirjainta.
#Jos on palindromi, tulosta 1, muuten 0

$sana = $_REQUEST['sana'];

#Otetaan $vastike muuttuja joka on $sana, mutta v��rinp�in
$vastike = strrev($sana);

#verrataan...
if($vastike == $sana)
{
#Jos on palindromi, tulosta 1
echo "1";
}
else
#jos ei, tulosta 0
echo "0";

?>