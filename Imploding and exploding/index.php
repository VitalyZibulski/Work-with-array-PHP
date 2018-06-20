<?php


	$users = ['antony', 'ron', 'antony1', 'ron1'];

	echo implode(',', $users);


$users = 'antony, ron, antony1,ron1';

$users = explode(',', $users);

var_dump($users);

