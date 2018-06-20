<?php


	$users = ['antony', 'ron'];

	$moreUsers = ['antony1', 'ron1'];


	$allUsers = array_merge($users, $moreUsers);

	var_dump($allUsers);


$users = 'antony, ron, antony1,ron1';

$users = explode(',', $users);

var_dump($users);

