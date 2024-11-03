<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '2, 3, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 8',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12',//count trio: 11
			'inter' => '2, 3',
		],
		'win inter' => '1, 2, 3, 5, 8',
		'win inter 2' => '5, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'all fav history' => [[8, 2, 3]],
		'all fav history values' => '2, 3, 8',
		'bets' => [
			'place(end-favorites 1410)' => '7',
			'place(end-wp 1410)' => '7',
			'super sure bet' => 'super sure place 7',
		],
		'total bets' => 300,
		'wp' => '2, 3, 7',//count wp: 3
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '1, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '6',
			'qin' => '2, 6',
			'trio' => '2, 6, 9',//count trio: 3
			'inter' => '',
		],
		'win inter' => '1, 6',
		'win inter 2' => '6',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
			'place(wp 1410)' => '1',
		],
		'total bets' => 300,
		'wp' => '1',//count wp: 1
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 9, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '1, 3, 4, 7, 9, 12',
			'qin' => '1, 2, 3, 4, 5, 7, 8, 9, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12',//count trio: 11
			'inter' => '3, 9',
		],
		'win inter' => '3, 9, 12',
		'win inter 2' => '9',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8',
		'bets' => [
			'place(end-favorites 1410)' => '11',
			'place(wp 1410)' => '3',
			'super sure bet' => 'super sure place 11',
		],
		'total bets' => 500,
		'wp' => '3',//count wp: 1
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2, 5, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '2, 4, 5, 11',
			'qin' => '2, 4, 5, 6, 7, 10, 11, 12',
			'trio' => '1, 2, 4, 5, 6, 7, 10, 11, 12',//count trio: 9
			'inter' => '2, 5',
		],
		'win inter' => '1, 2, 5',
		'win inter 2' => '2',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
			'place(end-favorites 1410)' => '8',
			'place(end-wp 1410)' => '8',
			'super sure bet' => 'super sure place 8',
		],
		'total bets' => 300,
		'wp' => '2, 5, 8',//count wp: 3
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '4, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '1, 11',
			'qin' => '1, 6, 7, 11',
			'trio' => '1, 2, 6, 7, 11',//count trio: 5
			'inter' => '11',
		],
		'win inter' => '1, 3, 11',
		'win inter 2' => '1, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '4, 11',//count wp: 2
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '2, 5, 6, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12, 13',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',//count trio: 14
			'inter' => '2, 5, 6',
		],
		'win inter' => '1, 2, 6',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 13',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 5, 6, 10',//count wp: 4
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3, 7, 10, 13',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '3, 5, 6, 7, 8, 12',
			'qin' => '1, 2, 3, 5, 6, 7, 8, 9, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12, 14',//count trio: 12
			'inter' => '3, 7',
		],
		'win inter' => '',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3, 7',//count wp: 2
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 10',
			'qin' => '1, 2, 3, 5, 7, 9, 10, 12',
			'trio' => '1, 2, 3, 5, 6, 7, 9, 10, 12',//count trio: 9
			'inter' => '1, 10',
		],
		'win inter' => '3, 5, 8, 10',
		'win inter 2' => '1, 2, 3, 5, 10',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 10',//count wp: 2
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 3, 4, 9, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 8, 9, 10, 12, 13',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',//count trio: 14
			'inter' => '2, 3, 4, 9',
		],
		'win inter' => '1, 2, 9, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 3, 4, 9, 11',//count wp: 5
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '1, 4, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '2, 3, 4, 10, 11',
			'qin' => '1, 2, 3, 4, 5, 9, 10, 11, 13',
			'trio' => '1, 2, 3, 4, 5, 8, 9, 10, 11, 13, 14',//count trio: 11
			'inter' => '4, 10',
		],
		'win inter' => '4, 10, 11',
		'win inter 2' => '11',
		'allValues' => '',
		'bets' => [
			'place(end-favorites 1410)' => '10',
			'super sure bet' => 'super sure place 10',
		],
		'total bets' => 200,
		'wp' => '',//count wp: 0
	],
];
//total place end favorites: -400
//total place end wp: -200
//total place wp: -600
//total sure place: -400
//total win: 0
//total: 0
