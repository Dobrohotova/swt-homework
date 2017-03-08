<?php

function paren($broj){
	if($broj % 2 == 0) {
		return true;
	} else {
		return false;
	}
}

function test($data){
	foreach($data as $d){
		$br = paren($d['broj']);
		if($br == $d['expected']){
			echo '<span style="color: green;">Success!</span><br/>';
		} else if($br !== $d['expected']){
			echo '<span style="color: red;">Fail!</span><br/>';
		}
	}
}

$data = [
	[
		'broj' => 5,
		'expected' => false
	],
	[
		'broj' => 45882,
		'expected' => false
	],
	[
		'broj' => 204826,
		'expected' => true
	],
	[
		'broj' => 1000000,
		'expected' => true
	],
	[
		'broj' => 17244,
		'expected' => true
	],
	[
		'broj' => 2569,
		'expected' => false
	],
	[
		'broj' => 4769673,
		'expected' => false
	],
	[
		'broj' => 3948566,
		'expected' => true
	],
	[
		'broj' => 384883,
		'expected' => false
	],
	[
		'broj' => 47565488,
		'expected' => true
	],
];


test($data);

?>