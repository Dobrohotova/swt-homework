<?php

function palindrom($ime){
	$reverse = strrev($ime);
	if($ime == $reverse){
		return true;
	} else if($ime !== $reverse){
		return false;
	}
}

function test($data){
	foreach($data as $d){
		$pal = palindrom($d['ime']);
		if($pal == $d['expected']){
			echo '<span style="color: green;">Success!</span><br/>';
		} else if($pal !== $d['expected']){
			echo '<span style="color: red;">Fail!</span><br/>';
		}
	}
}

$data = [
	[
		'ime' => 'ana',
		'expected' => false
	],
	[
		'ime' => 'marko',
		'expected' => false
	],
	[
		'ime' => 'hanah',
		'expected' => true
	],
	[
		'ime' => 'spacecaps',
		'expected' => true
	],
	[
		'ime' => 'stats',
		'expected' => true
	],
	[
		'ime' => 'broom',
		'expected' => false
	],
	[
		'ime' => 'kick',
		'expected' => false
	],
	[
		'ime' => 'kayak',
		'expected' => true
	],
	[
		'ime' => 'chair',
		'expected' => false
	],
	[
		'ime' => 'pop',
		'expected' => true
	],
];


test($data);

?>