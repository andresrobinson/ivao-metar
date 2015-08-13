<?php
//CONFIG
$url = 'http://example.tld/taf.php'; //url of the source
$dom = new DOMDocument();
libxml_use_internal_errors(true);
$dom->loadHTMLFile($url);
libxml_clear_errors();
$xpath = new DOMXpath($dom);

//Searching for TAF data
$metars = $xpath->query('//td[contains(text(), "TAF")]'); //Where in the HTML the data is? In this case <td> contening text: TAF
if($metars->length <= 0) {
    echo 'No TAF found'; //In case no data is found, show error message
    exit;
}

$data = array();
//Showing results
echo '';
foreach($metars as $metar) {
    if(substr($metar->nodeValue, 0, 3) === "TAF") {
         echo str_replace("TAF ", "", $metar->nodeValue) . PHP_EOL; //In case there is a word before the ICAO code, ex: the TAF word will be removed.
    }
}

?>