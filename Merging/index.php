<?php


	$users = ['antony', 'ron'];

	$moreUsers = ['antony1', 'ron1'];


	$allUsers = array_merge($users, $moreUsers);

	var_dump($allUsers);

	<?php

$originalState =

	[
		'name' => 'antony',
		'email'=>'antony@gmail.com',
		'likes' => ['cats', 'food']


	];


$alteredState =

	[
		'name' => 'antony',
		'email'=>'antony@gmail.com',
		'likes' => ['cats1', 'food1']


	];




$user = array_merge_recursive($originalState, $alteredState);

var_dump($user);