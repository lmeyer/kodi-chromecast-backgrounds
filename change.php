<?php

$dir_handle = @opendir(__DIR__.'/bg') or die("Unable to open $path");
$files = array();
while ($file = readdir($dir_handle)) {
	if(!in_array($file, array('.', '..'))){
		$files[] = $file;
	}
}
closedir($dir_handle);

$rand_img = $files[array_rand($files)];

copy(__DIR__.'/bg/'.$rand_img, __DIR__.'/background.jpg');