<?php
header('Content-type: text/xml');

function returnimages($dirname) {
	$pattern="(\.jpg$)|(\.png$)|(\.jpeg$)|(\.gif$)";
	foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator(realpath("../../" . $dirname))) as $filepath) { 
		if(eregi($pattern, $filepath)){
			$file =  explode("/", $filepath);
			echo "<file>" . $file[count($file)-1] . "</file>";
		}
	}
	
}


$folder = $_GET['folder'];
$dir = $folder;

echo '<files>';
	returnimages($dir);
echo '</files>';
?>