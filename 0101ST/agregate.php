<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 1, 2',
		'unions($10)' => '1, 2, 3, 8',
		'union + favorites' => '1, 2, 3, 8',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 2, 10, 11',
		'unions($10)' => '2, 4, 7, 10, 11',
		'union + favorites' => '2, 4, 7, 10, 11',
		'win(union 1006)' => '2, 4, 10, 11',
		'win(union 1041)' => '2, 7, 10, 11',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 1, 2, 6',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 1, 2, 3, 5',
		'place(end-favorites )' => '5',
		'super sure bet' => 'super sure place 5',
		'places($10)' => '3, 5',
		'sures($10)' => '3',
		'super sures($10)' => '3, 5',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 5',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '(F) 5',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '(F) 2, 3, 7',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '(F) 6, 8, 9',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '(F) 1, 4, 5, 11',
		'place(end-favorites )' => '11',
		'super sure bet' => 'super sure place 11',
		'places($10)' => '5, 11',
		'super sures($10)' => '11',
		'place(end-wp 1017)' => '5',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '(F) 1, 10',
		'unions($10)' => '1, 4, 7, 10, 11',
		'union + favorites' => '1, 4, 7, 10, 11',
		'win(union 1007)' => '1, 7, 10, 11',
		'win(union 1032)' => '1, 4, 7, 10',
	],
	'11' => [
		/**
		Race 11
		*/
		'favorites' => '(F) 2, 3, 10, 11',
	],
];
