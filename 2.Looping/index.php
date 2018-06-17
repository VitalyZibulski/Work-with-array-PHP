<?php

/*$statuses = [

	['text' => 'one text'],
	['text' => 'two text'],
	'status' => 200,
];


foreach($statuses as $index => $status){
	//var_dump($statuses);
	if($index !== 'status'){// or if($index === 'status'){continue;}
		echo $status['text'], '<br>';
	}

}*/

$people = [

	[
		'id' => 1,
		'name' => 'antony',
		'email' => 'antony@mail.com',

	],

	[
		'id' => 2,
		'name' => 'ron',
		'email' => 'ron@mail.com',

	],



];


/*$toFind = 'antony';

$found = false;


foreach($people as $person){

	if($person['name'] === $toFind){
		$found = $person;
		break;

	}

}

var_dump($found);*/

foreach($people as &$person){

		$person['name'] = 'dale';

}

var_dump($people);


//or


$newPeople = [];

foreach($people as $person){
	$person['name'] = 'dale';
	$newPeople = $person;

}

var_dump($people);



//--------------------------------------------------------------

$numbers = [1,2,3,4];

foreach($numbers as &$number){
	$number = $number * 2;
	unset($number);
}

foreach($numbers as $number){
	var_dump($number);
}





