<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 2, 6, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 6, 7, 8',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8',//count trio: 8
			'inter' => '1, 2, 6, 7',
		],
		'win inter' => '1',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 2, 6, 7',//count wp: 4
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 9, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '2, 4, 6, 10, 12',
			'qin' => '1, 2, 3, 4, 6, 10, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 8, 9, 10, 12',//count trio: 10
			'inter' => '2, 12',
		],
		'win inter' => '6',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
			'win(union 1538)' => '2, 6, 9, 12',
		],
		'total bets' => 400,
		'wp' => '2, 9',//count wp: 2
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 3, 5, 6, 7, 12',
		'allValues' => '1, 3, 4, 5, 6, 7, 8',
		'all fav history' => [[6, 5, 7]],
		'all fav history values' => '5, 6, 7',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '6',//count wp: 1
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '3, 8, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '2, 6',
			'qin' => '2, 3, 4, 6, 10',
			'trio' => '2, 3, 4, 6, 7, 10',//count trio: 6
			'inter' => '',
		],
		'win inter' => '1, 2',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3, 8, 10',//count wp: 3
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '2, 5, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 9',
			'qin' => '1, 2, 3, 4, 5, 9, 12',
			'trio' => '1, 2, 3, 4, 5, 7, 8, 9, 12',//count trio: 9
			'inter' => '2, 5',
		],
		'win inter' => '2, 4',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 5',//count wp: 2
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '2, 6, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 6, 9, 11',
			'qin' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 11
			'inter' => '2, 6',
		],
		'win inter' => '1, 5, 6, 8, 11',
		'win inter 2' => '1, 6, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'all fav history' => [[11, 8, 3]],
		'all fav history values' => '3, 8, 11',
		'bets' => [
			'place(end-favorites 1538)' => '8',
			'place(end-wp 1538)' => '8',
			'super sure bet' => 'super sure place 8',
		],
		'total bets' => 300,
		'wp' => '2, 6, 8',//count wp: 3
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '2, 3, 5, 10, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1',//count wp: 1
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 3, 10, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 7, 8, 10, 11',
			'qin' => '1, 2, 3, 4, 5, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '1, 3, 10, 11',
		],
		'win inter' => '3, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 3, 10, 11',//count wp: 4
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '1, 2, 4, 5, 6, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '1, 2, 4, 5, 6, 8',
		],
		'win inter' => '1, 5, 8, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 2, 4, 5, 6, 8',//count wp: 6
	],
];
//total place end favorites: -100
//total place end wp: -100
//total place wp: 0
//total sure place: -100
//total win: -400
//total: 0
