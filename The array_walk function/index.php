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

	/*array_walk($users, function(&$user, $index){

		//$user['name'] = 'Dale';
		$user['full_name'] = 'Dale';
		return $user;

	});*/

	/*array_walk($users, function(&$user, $index, $data){
		$user['name'] = $data['name'];
		$user['profile'] = $data['profile'];

		return $user;

	},['name' => 'Dale', 'profile' => 15]);



	var_dump($users);*/


	/*function joinName(&$user, $index, $delimiter= ' '){

		$user['full_profile'] = $user['name'] . $delimiter . $user['profile'];

		return $user;
	}

	array_walk($users, 'joinName', '%20');

	var_dump($users);*/





//-----------------------------------------------------------------

	$payload = [

		[
			'id' => 1.5,
			'body' => 'description',
			'user' => [
				'id' => '125'
			]

		],

		[
			'id' => 2,
			'body' => 'description1',
			'user' => [
				'id' => '456'
			]

		]
	];


	/*array_walk_recursive($payload, function(&$value){
		/*if(is_numeric($value)){
			$value = (int) $value;
		}

		$value = is_numeric($value) ? (int) $value : $value;

	});

	var_dump($payload);*/ //int 1.5 in 1


	function castNumericValues(&$value){

		/*if(is_numeric($value)){

			$value = (float) $value;

			if(floor($value) === $value){

				$value = (int) $value;
			}
		}*/


		if(!is_numeric($value)){
			return;
		}


		$value = (float) $value;

		if(floor($value) === $value){

			$value = (int) $value;

		}


	}

	array_walk_recursive($payload, 'castNumericValues');


