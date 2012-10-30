<?php
###
# Ohjelmointiputkan PHP-haasteen 24. tehtävän vastaus.
# Tuhertanut: Kare Salo
###
# Skriptin täytyy tulostaa sana ROT13-salattuna.
# Tässä tehtävässä tutkitaan sanoja, jotka muodostuvat kirjaimista A–Z.
# ROT13-salauksessa jokaista sanan kirjainta siirretään 13 askelta eteenpäin aakkosissa
# Tehtävänä on kohdistaa ROT13-salaus annettuun sanaan.
# Voit olettaa, että sanassa on korkeintaan sata kirjainta.

print str_rot13($_REQUEST['sana']);
?>