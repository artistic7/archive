<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 5, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 6, 9, 11',
			'qin' => '1, 6, 8, 9, 10, 11',
			'trio' => '1, 4, 5, 6, 8, 9, 10, 11',//count trio: 8
			'inter' => '1, 11',
		],
		'win inter' => '8, 11',
		'win inter 2' => '9',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 5',//count wp: 2
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '1, 5, 8, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '2, 4, 5, 6, 7, 8, 9, 10, 12',
			'qin' => '1, 2, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '5, 8, 9',
		],
		'win inter' => '4, 9',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 5, 8, 9',//count wp: 4
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 8, 10',
		'runners' => '1, 2, 3, 5, 6, 7, 8, 9, 10',
		'suggestions' => [
			'win' => '1, 3, 8',
			'qin' => '1, 3, 5, 8',
			'trio' => '1, 2, 3, 5, 6, 7, 8, 9',//count trio: 8
			'inter' => '3, 8',
		],
		'win inter' => '8',
		'win inter 2' => '8',
		'allValues' => '1, 2, 3, 5, 6, 7, 8',
		'all fav history' => [[8, 5, 11]],
		'all fav history values' => '5, 8, 11',
		'bets' => [
			'place(end-favorites 604)' => '10',
		],
		'total bets' => 100,
		'wp' => '3, 8',//count wp: 2
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 2, 4, 5, 6',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'all fav history' => [[2, 5, 9], [5, 3, 6]],
		'all fav history values' => '2, 3, 5, 6, 9',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '5',//count wp: 1
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '2, 6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 8, 12',
			'qin' => '1, 2, 4, 6, 8, 10, 12',
			'trio' => '1, 2, 3, 4, 6, 8, 10, 12',//count trio: 8
			'inter' => '',
		],
		'win inter' => '1, 4, 8, 11, 12',
		'win inter 2' => '1, 8, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 6',//count wp: 2
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 7, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 7, 9, 10, 12',
			'qin' => '1, 2, 3, 5, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 11
			'inter' => '3, 7, 10',
		],
		'win inter' => '1, 3, 7, 8, 12',
		'win inter 2' => '1',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3, 7, 10',//count wp: 3
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '5, 6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 6, 12',
			'qin' => '1, 2, 5, 6, 8, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 8, 9, 12',//count trio: 9
			'inter' => '6',
		],
		'win inter' => '1, 2, 3, 6, 7, 10, 12',
		'win inter 2' => '1, 6, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '5, 6',//count wp: 2
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 5, 6, 8, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '4, 5, 6, 8',
		],
		'win inter' => '4, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '4, 5, 6, 8, 11',//count wp: 5
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 5, 6, 8, 9',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 7',//count wp: 2
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '1, 2, 3, 5, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 7, 9, 10, 11, 12',
			'qin' => '1, 2, 3, 4, 5, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 7, 8, 9, 10, 11, 12',//count trio: 11
			'inter' => '1, 2, 3, 11',
		],
		'win inter' => '',
		'allValues' => '',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '',//count wp: 0
	],
];
//total place end favorites: -100
//total place end wp: 0
//total place wp: 0
//total sure place: 0
//total win: 0
//total: 0
