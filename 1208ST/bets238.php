<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '2, 3, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '1, 2, 5, 8',
			'qin' => '1, 2, 4, 5, 6, 8',
			'trio' => '1, 2, 3, 4, 5, 6, 8, 12',//count trio: 8
			'inter' => '2',
		],
		'win inter' => '',
		'win inter 2' => '1, 2, 5, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 3',//count wp: 2
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3, 6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '2, 3, 5, 6, 9, 10',
			'qin' => '1, 2, 3, 5, 6, 9, 10, 12',
			'trio' => '1, 2, 3, 5, 6, 9, 10, 12',//count trio: 8
			'inter' => '3, 6',
		],
		'win inter' => '2, 4, 5, 6, 7, 8, 9',
		'win inter 2' => '2, 3, 5, 6, 9, 10',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'all fav history' => [[2, 6, 3]],
		'all fav history values' => '2, 3, 6',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3, 6',//count wp: 2
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '1, 13',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '2, 9',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8',
		'bets' => [
			'win(union 238)' => '1, 2, 9, 13',
		],
		'total bets' => 400,
		'wp' => '1',//count wp: 1
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '13',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '12, 13',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '',//count wp: 0
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 2, 3, 4, 5, 7, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'all fav history' => [[1, 8, 2], [3, 6, 1]],
		'all fav history values' => '1, 2, 3, 6, 8',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1',//count wp: 1
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 3, 5, 6, 8, 11, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 13',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '8',//count wp: 1
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '2, 6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '2',
			'qin' => '1, 2',
			'trio' => '1, 2, 4',//count trio: 3
			'inter' => '2',
		],
		'win inter' => '1, 2, 5, 7',
		'win inter 2' => '2',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 6',//count wp: 2
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 2',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 8',
			'qin' => '1, 2, 3, 5, 6, 8, 9, 10, 11',
			'trio' => '1, 2, 3, 4, 5, 6, 8, 9, 10, 11',//count trio: 10
			'inter' => '1, 2',
		],
		'win inter' => '1, 3, 4, 8',
		'win inter 2' => '1, 2, 3, 5, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8',
		'all fav history' => [[1, 6, 8]],
		'all fav history values' => '1, 6, 8',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 2',//count wp: 2
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '3, 5, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '1, 3, 5, 8, 12',
			'qin' => '1, 3, 5, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 11
			'inter' => '3, 5, 12',
		],
		'win inter' => '5, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3, 5',//count wp: 2
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '2, 4, 7, 10, 11',
		'allValues' => '',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '',//count wp: 0
	],
];
//total place end favorites: 0
//total place end wp: 0
//total place wp: 0
//total sure place: 0
//total win: -400
//total: 0
