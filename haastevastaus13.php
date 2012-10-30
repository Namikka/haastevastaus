<?php
###
# Ohjelmointiputkan PHP-haasteen 13. tehtävän vastaus.
# Tuhertanut: Kare Salo
#Sana on palindromi, jos se on sama alusta loppuun ja lopusta alkuun luettuna. 
#Esimerkiksi sanat ENNE ja SYTYTYS ovat palindromeja. 
#Tehtävänä on tarkistaa, onko annettu sana palindromi. 
#Voit olettaa, että sana muodostuu kirjaimista A–Z ja siinä on korkeintaan sata kirjainta.
#Jos on palindromi, tulosta 1, muuten 0

$sana = $_REQUEST['sana'];

#Otetaan $vastike muuttuja joka on $sana, mutta väärinpäin
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