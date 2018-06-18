<?php

	$users = [

		['username' => 'antony', 'score' => 0],
		['username' => 'ron', 'score' => 0],
		['username' => 'antony1', 'score' => 50],
		['username' => 'ron1', 'score' => 12]

	];


	/*$user =array_filter($users, function($user){

		/*if($user['score'] > 0){
			return true;

		}*/

	/*return $user['score'] > 0;

	});*/


	$users = array_filter($users, function($user, $index){

		return $index === 0;
	}, ARRAY_FILTER_USE_BOTH);



	var_dump($users);

	$scores = [
		2,
		5,
		10,
		0 // false, 0, -5
	];