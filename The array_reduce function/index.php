<?php

	$users = [

		[
			'price' => 5,
		],

		[
			'price' => 2,
		],
		[
			'price' => 10,
		],

	];


	$total = array_reduce($users, function($carry,$user){
		if(!$carry){
			return $user;

		}

		$carry['price'] += $user['price'];

		return $carry;
	}, null);


	var_dump($total);