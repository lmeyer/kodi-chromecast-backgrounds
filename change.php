<?php

$dir_handle = @opendir('bg') or die("Unable to open $path");
$files = array();
while ($file = readdir($dir_handle)) {
	if(!in_array($file, array('.', '..'))){
		$files[] = $file;
	}
}
closedir($dir_handle);

$rand_img = $files[array_rand($files)];

copy('bg/'.$rand_img, 'background.jpg');