<?php

	/*$array  = ['antony' => 28, 'ron' => 29];

	var_dump(array_keys($array));*/


//$db = new PDO("mysql:host=localhost;dbname=project, root, ''");

	$fields = [
		'name' => 'antony',
		'email' => 'antony@mail.com',
		'profile' => 'user'
	];

	$id =1;

//$update = $db->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");

	/*$update->execute([
		'antony',
		'email',
		1
	]);*/

//but you should about case when we haven't email or others

	$values = implode(' = ?,',array_keys($fields)) . ' = ?';

	$update = $db->prepare("UPDATE users SET {values} WHERE id = ?");

//echo "UPDATE users SET {$values} WHERE id = ?";

	$update->execute(array_merge(array_values($fields,[$id])));