<?

$path = dirname(__FILE__);

//AR
$ARmetar = 'http://weather.ivao.com.ar/get/metar.php';
$ARtaf = 'http://weather.ivao.com.ar/get/taf.php';
copy($ARmetar,"$path/source/ARmetar.txt");
copy($ARtaf,"$path/source/ARtaf.txt");

//BR
$BRmetar = 'http://www.ivao.com.br/util/metar/adsb.txt';
$BRtaf = 'http://www.ivao.com.br/util/taf/adsb.txt';
copy($BRmetar,"$path/source/BRmetar.txt");
copy($BRtaf,"$path/source/BRtaf.txt");
?>
