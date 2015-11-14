<?php
$path = dirname(__FILE__);

//AR
$ARmetar = 'http://www.ivao.com.ar/weather/metar.txt';
$ARtaf = 'http://www.ivao.com.ar/weather/taf.txt';
//BR
$BRmetar = 'http://www.ivao.com.br/util/metar/adsb.txt';
$BRtaf = 'http://www.ivao.com.br/util/taf/adsb.txt';

copy($ARmetar,"$path/ARmetar.txt");
copy($ARtaf,"$path/ARtaf.txt");
copy($BRmetar,"$path/BRmetar.txt");
copy($BRtaf,"$path/BRtaf.txt");

$filesMetar = glob("*metar.txt");
$outMetar = fopen("output/metar.txt", "w");
foreach($filesMetar as $fileMetar){
    fwrite($outMetar, file_get_contents($fileMetar));
}
fclose($outMetar);

$filesTaf = glob("*taf.txt");
$outTaf = fopen("output/taf.txt", "w");
foreach($filesTaf as $fileTaf){
    fwrite($outTaf, file_get_contents($fileTaf));
}
fclose($outTaf);
?>