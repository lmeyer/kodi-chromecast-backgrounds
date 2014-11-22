<?php

$url = 'https://raw.githubusercontent.com/dconnolly/chromecast-backgrounds/master/backgrounds.json';
$bgs = json_decode(file_get_contents($url));

if (!file_exists(__DIR__.'/bg')) {
    mkdir(__DIR__.'/bg', 0777, true);
}

$dir_handle = @opendir(__DIR__.'/bg') or die("Unable to open $path");
$files = array();
while ($file = readdir($dir_handle)) {
	if(!in_array($file, array('.', '..'))){
		$files[] = $file;
	}
}
closedir($dir_handle);

foreach($bgs as $bg) {
	$file_url = $bg->url;
	$file_name = explode("/", $file_url);
	$file_name = urldecode(array_pop($file_name));

	if(in_array($file_name, $files)) {
		echo $file_name . ' already exists' . "\n";	
		continue;	
	}
	
	$img = file_get_contents($file_url);
	$byteCountOrFalseOnFailure = file_put_contents(__DIR__.'/bg/' . $file_name, $img);

	echo 'Download : ' . $file_name . ' for ' . $byteCountOrFalseOnFailure . ' bytes' . "\n";
}