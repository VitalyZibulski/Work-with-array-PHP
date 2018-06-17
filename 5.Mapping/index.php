<?php

	$users = [

		[
			'id' => 1,
			'name' => 'antony',
			'email' => 'antony@mail.com',
			'profile' => '1'

		],

		[
			'id' => 2,
			'name' => 'ron',
			'email' => 'ron@mail.com',
			'profile' => 2

		],

		[
			'id' => 3,
			'name' => 'antony1',
			'email' => 'antony1@mail.com',
			'profile' => 3

		],

		[
			'id' => 4,
			'name' => 'ron1',
			'email' => 'ron1@mail.com',
			'profile' => 4

		],



	];


	/*$users = array_map(function($user){
		if(!$user['name'] && !$user['profile']){
			$user['full_profile'] = null;
			return $user;
		}

		$user['full_profile'] = $user['name'] . ' ' . $user['profile'];

		return $user;
	}, $users);*/

//var_dump($users);


//---------------------------------------------------------------
//index

	/*$users = array_map(function($user, $index, $letter){

		//var_dump($letter);


	}, $users, array_keys($users), ['a','b', 'c', 'd']);*/



//---------------------------------------------------------------


	$ages = [26, 28, 29, 100];

	$users = array_map(function($user, $index) use ($ages){
		$user['age'] = $ages[$index];
		return $user;

	}, $users, array_keys($users));


	//var_dump($users);