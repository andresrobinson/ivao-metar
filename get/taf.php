<?php
$url = 'http://www.smn.gov.ar/mensajes/index.php?observacion=taf&operacion=consultar&87582=on&87750=on&87765=on&87222=on&87761=on&87860=on&87344=on&87166=on&87904=on&87803=on&87576=on&87162=on&87097=on&87046=on&87217=on&87692=on&87418=on&87715=on&87374=on&87178=on&87155=on&87925=on&87934=on&87480=on&87047=on&87553=on&87311=on&87436=on&87509=on&87623=on&87129=on&87371=on&87127=on&87828=on&87121=on&87938=on&87791=on&86560=on&86530=on&86582=on&86575=on&86580=on';
$dom = new DOMDocument();
libxml_use_internal_errors(true);
$dom->loadHTMLFile($url);
libxml_clear_errors();
$xpath = new DOMXpath($dom);

// search for td's with contains TAF
$tafs = $xpath->query('//td[contains(text(), "TAF")]');
if($tafs->length <= 0) {
    echo 'no tafs found';
    exit;
}

$data = array();


echo '';
foreach($tafs as $taf) {
    if(substr($taf->nodeValue, 0, 3) === "TAF") {
         echo str_replace("TAF ", "", $taf->nodeValue) . PHP_EOL;
    }
}

?>