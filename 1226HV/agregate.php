<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 1, 5, 11',
		'unions($10)' => '1, 5, 8, 11',
		'union + favorites' => '1, 5, 8, 11',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 1, 5',
		'win(union 100)' => '1, 5, 6, 9',
		'unions($10)' => '1, 4, 5, 6, 9',
		'union + favorites' => '1, 4, 5, 6, 9',
		'win(union 1043)' => '1, 4, 5, 9',
		'win(union 1442)' => '1, 4, 5, 6',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 3, 8, 10',
		'place(end-favorites )' => '10',
		'places($10)' => '10',
		'sures($10)' => '10',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 5',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 2, 6',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '(F) 3, 10',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '(F) 6',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '(F) 4, 5, 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '(F) 7',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '(F) 2, 5, 11',
		'unions($10)' => '1, 2, 5, 7, 11, 12',
		'union + favorites' => '1, 2, 5, 7, 11, 12',
		'win(union 100)' => '1, 2, 5, 11',
		'win(union 1009)' => '2, 5, 7, 11',
	],
];
