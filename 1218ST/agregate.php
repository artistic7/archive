<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 3, 4',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 2, 7',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 1, 7',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 10',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 2',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '(F) 2, 7',
		'unions($10)' => '1, 2, 3, 7, 8, 9',
		'union + favorites' => '1, 2, 3, 7, 8, 9',
		'win(union 1351)' => '2, 3, 7, 8',
		'win(union 1378)' => '2, 3, 7, 9',
		'win(union 1547)' => '1, 2, 3, 7',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '(F) 1, 8, 11',
		'placesWP($30)' => '1',
		'unions($10)' => '1, 6, 8, 10, 11, 12',
		'union + favorites' => '1, 6, 8, 10, 11, 12',
		'win(union 1018)' => '1, 6, 8, 11',
		'win(union 1025)' => '1, 8, 11, 12',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '(F) 6, 7',
	],
];
