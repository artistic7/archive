<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 1, 10',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 3, 6',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 9',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 2',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 2, 3',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '(F) 1, 6',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '(F) 1, 3, 11',
		'win(union 1025)' => '1, 3, 10, 11',
		'unions($10)' => '1, 3, 6, 10, 11',
		'union + favorites' => '1, 3, 6, 10, 11',
		'win(union 1035)' => '1, 3, 6, 11',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '(F) 11, 12',
		'unions($10)' => '4, 8, 11, 12',
		'union + favorites' => '4, 8, 11, 12',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '(F) 3',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '(F) 1, 2, 3, 5, 7',
		'places($10)' => '5, 7',
		'sures($10)' => '7',
		'unions($10)' => '1, 3, 7, 10',
		'union + favorites' => '1, 2, 3, 5, 7, 10',
	],
];
