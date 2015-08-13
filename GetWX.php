<?

$path = dirname(__FILE__);

$fileMetar = 'http://yourdomain.tld/path/to/script/GetMetar.php'; //url to your GetMetar.php file
$fileTaf = 'http://yourdomain.tld/path/to/script/GetTaf.php'; //url to your GetTaf.php file

copy($fileMetar,"$path/metar.txt"); //Will copy the content obtained in GetMetar.php into metar.txt

copy($fileTaf,"$path/taf.txt"); //Will copy the content obtained in GetTaf.php into taf.txt

?>
