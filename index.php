		<center>
		<form action="<?php $_PHP_SELF ?>" method="get" class="form-horizontal" role="form">
			<label>Airport</label>
			<input class="form-control" type="text" name="icao" id="inputICAO" placeholder="ICAO">
			<input type="submit" name="enviar" value="Search">
		</form>
		
<?
$icao = $_GET['icao'];
$fileMetar = 'source/ARmetar.txt';
$fileTaf= 'source/ARtaf.txt';
if ($icao == ''){
	echo '';
}else{
// the following line prevents the browser from parsing this as HTML.
header('Content-Type: text/plain');

// get the file contents, assuming the file to be readable (and exist)
$contentsMetar = file_get_contents($fileMetar);
$contentsTaf = file_get_contents($fileTaf);
// escape special characters in the query
$pattern = preg_quote($icao, '/');
// finalise the regular expression, matching the whole line
$pattern = "/^.*$pattern.*\$/m";
// search, and store all matching occurences in $matches
if(preg_match_all($pattern, $contentsMetar, $matchesMetar)){
   echo "METAR:\n";
   echo implode("\n", $matchesMetar[0]);
}
else{
   echo "No METAR found";
}

echo '<br>';

if(preg_match_all($pattern, $contentsTaf, $matchesTaf)){
   echo "TAF:\n";
   echo implode("\n", $matchesTaf[0]);
}
else{
   echo "No TAF found";
}
}
?>
</center>