<?php

$files = opendir('files');


$ignoreFiles = ['.', '..',];

while(($file = readdir($files)) !== false){
	//var_dump($file); // '.', '..'
	if(in_array($file, $ignoreFiles)){
		continue;
	}

}