<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 6, 7',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 2, 9, 12',
		'unions($10)' => '2, 6, 9, 12',
		'union + favorites' => '2, 6, 9, 12',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 6',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 3, 8, 10',
		'placesWP($30)' => '3',
		'unions($10)' => '1, 2, 3, 8, 10',
		'union + favorites' => '1, 2, 3, 8, 10',
		'win(union 1005)' => '2, 3, 8, 10',
		'win(union 1042)' => '1, 3, 8, 10',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 2, 12',
		'placesWP($30)' => '2',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '(F) 6, 8',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '(F) 1',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '(F) 1, 3, 11',
		'win(union 2135)' => '1, 3, 4, 11',
		'unions($10)' => '1, 3, 4, 11',
		'union + favorites' => '1, 3, 4, 11',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '(F) 1, 2, 4, 5, 6',
		'places($10)' => '5',
		'sures($10)' => '5',
		'super sures($10)' => '5',
	],
];
