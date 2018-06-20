<?php

	$colours = ['black', 'red', 'green', 'white'];
//$backgroundColour = $colours[rand(0, count($colours)-1)];


	$backgroundColourKey = array_rand($colours, 1);


	$backgroundColour = $colours[$backgroundColourKey];

	var_dump($backgroundColour);