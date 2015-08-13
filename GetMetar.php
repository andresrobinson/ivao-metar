<?php
//CONFIG
$url = 'http://example.tld/metar.php'; //url of the source
$dom = new DOMDocument();
libxml_use_internal_errors(true);
$dom->loadHTMLFile($url);
libxml_clear_errors();
$xpath = new DOMXpath($dom);

//Searching for METAR data
$metars = $xpath->query('//td[contains(text(), "METAR")]'); //Where in the HTML the data is? In this case <td> contening text: METAR 
if($metars->length <= 0) {
    echo 'No METAR found'; //In case no data is found, show error message
    exit;
}

$data = array();
//Showing results
echo '';
foreach($metars as $metar) {
    if(substr($metar->nodeValue, 0, 5) === "METAR") {
         echo str_replace("METAR ", "", $metar->nodeValue) . PHP_EOL; //In case there is a word before the ICAO code, ex: the METAR word will be removed.
    }
}

?>