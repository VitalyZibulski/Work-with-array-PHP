<?php

	$allowFileExtensions = ['jpg', 'jpeg', 'png'];

	$filename = 'profile.jpg';

	$fileParts = explode('.', $filename);

	$fileExtension = end($fileParts);

	if(in_array($fileExtension, $allowFileExtensions)){
		echo 'Upload';
	}

