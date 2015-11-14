<?php
echo '<pre>';
echo file_get_contents("http://ar.ivao.aero/weather/source/ARmetar.txt");
echo file_get_contents("http://www.ivao.com.br/util/metar/adsb.txt");
?>