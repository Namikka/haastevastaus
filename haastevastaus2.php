<?php
###
# Ohjelmointiputkan PHP-haasteen 2. tehtävän vastaus.
# Tuhertanut: Kare Salo

# Ensin julistetaan oikea salasana ja käyttäjätunnus base64-koodauksella koska olemme ovelia.
$salasana = base64_encode('sala123');
$tunnus = base64_encode('admin');

# Sitten tarkistamme onko annettu salasana ja käyttäjätunnus oikein.

if(base64_encode($_REQUEST['salasana']) == $salasana && base64_encode($_REQUEST['tunnus']) == $tunnus)
{
echo "OK";
}
else
{
echo "VIRHE";
}
?>