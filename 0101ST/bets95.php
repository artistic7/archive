<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 2',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 6',
			'qin' => '1, 4, 6, 7',
			'trio' => '1, 4, 5, 6, 7, 12',//count trio: 6
			'inter' => '1',
		],
		'win inter' => '1, 3, 8',
		'win inter 2' => '1, 6',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 2',//count wp: 2
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 10, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '4, 7, 10, 12, 14',
			'qin' => '1, 2, 4, 5, 6, 7, 9, 10, 12, 14',
			'trio' => '1, 2, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14',//count trio: 12
			'inter' => '10',
		],
		'win inter' => '4, 7',
		'win inter 2' => '7',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 10, 11',//count wp: 3
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '1',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 2, 3, 4, 7, 9, 10, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1',//count wp: 1
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2, 3',
		'runners' => '1, 2, 3, 4, 5, 6',
		'suggestions' => [
			'win' => '2, 3, 4',
			'qin' => '1, 2, 3, 4, 5',
			'trio' => '1, 2, 3, 4, 5, 6',//count trio: 6
			'inter' => '2, 3',
		],
		'win inter' => '1, 2, 3, 4',
		'win inter 2' => '2, 3, 4',
		'allValues' => '1, 2, 3, 4, 5, 6',
		'all fav history' => [[2, 5, 6]],
		'all fav history values' => '2, 5, 6',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 3',//count wp: 2
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 2, 3, 4, 5, 9',
		'allValues' => '1, 2, 3, 4, 5, 6, 10, 11',
		'all fav history' => [[5, 2, 6], [5, 6, 12]],
		'all fav history values' => '2, 5, 6, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '5',//count wp: 1
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 2, 3, 5, 6, 9, 11, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'all fav history' => [[5, 2, 3]],
		'all fav history values' => '2, 3, 5',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '5',//count wp: 1
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '2, 3, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '2, 3, 5, 6, 7, 9, 10, 14',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 14',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 14',//count trio: 12
			'inter' => '2, 3, 7',
		],
		'win inter' => '1, 2, 5, 7',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 3, 7',//count wp: 3
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '6, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'suggestions' => [
			'win' => '5, 9',
			'qin' => '5, 6, 8, 9',
			'trio' => '4, 5, 6, 7, 8, 9',//count trio: 6
			'inter' => '9',
		],
		'win inter' => '9, 10',
		'win inter 2' => '5, 9',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '6',//count wp: 1
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '4, 5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 5, 7, 8',
			'qin' => '1, 4, 5, 6, 7, 8, 10',
			'trio' => '1, 4, 5, 6, 7, 8, 9, 10',//count trio: 8
			'inter' => '5',
		],
		'win inter' => '1, 4, 5, 8, 9, 12',
		'win inter 2' => '1, 5, 7, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'all fav history' => [[5, 10, 4]],
		'all fav history values' => '4, 5, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '4, 5',//count wp: 2
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
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
	'11' => [
		/**
		Race 11
		*/
		'favorites' => '2, 3',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '',
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
//total win: 0
//total: 0
