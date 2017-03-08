<?php

function clean($string) {
   $string = str_replace(' ', '', $string);
   return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
}

function test($data){
	foreach($data as $d){
		$cle = clean($d['string']);
		if($cle == $d['expected']){
			echo '<span style="color: green;">Success!</span><br/>';
		} else if($cle !== $d['expected']){
			echo '<span style="color: red;">Fail!</span><br/>';
		}
	}
}


$data = [
	[
		'string' => '$ha%ha*ha',
		'expected' => 'hahaha'
	],
	[
		'string' => '$%%ha*ha',
		'expected' => 'haha'
	],
	[
		'string' => '$%ha*',
		'expected' => 'ha$%haha'
	],
	[
		'string' => '"^%$#$^ghj"',
		'expected' => 'ghj'
	],
	[
		'string' => '&^%$#fff',
		'expected' => '&^%fff'
	],
	[
		'string' => '#$a%^b&&c%',
		'expected' => 'abc'
	],
	[
		'string' => '*g#i$g&l$e',
		'expected' => 'gigle'
	],
	[
		'string' => '^j%u$s%t',
		'expected' => '^j%$ust'
	],
	[
		'string' => 'bl$bl$bl$',
		'expected' => 'blblbl'
	],
	[
		'string' => '$%s&o&*s^',
		'expected' => '$os'
	],
];


test($data);

?>