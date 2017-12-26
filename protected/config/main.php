<?php

return [
	'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
	'name' => 'CPA Network',

	'preload' => ['log'],

	'import' => [
		'application.interfaces.*',
		'application.helpers.*',
		'application.models.*',
		'application.models.ads_factory.*',
		'application.components.*',
	],

	'modules' => [],

	'components' => [

		'urlManager' => [
			'urlFormat' => 'path',
			'rules' => [
				'/getAnotherAd' => 'site/getAnotherAd',
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			],
		],
		'errorHandler' => [
			'errorAction' => YII_DEBUG ? null : 'site/error',
		],
		'log' => [
			'class' => 'CLogRouter',
			'routes' => [
				[
					'class' => 'CFileLogRoute',
					'levels' => 'error, warning',
				],
			],
		],
	],
	// using Yii::app()->params['paramName']
	'params' => [
		// this is used in contact page
		'adminEmail' => 'webmaster@example.com',
	],
];
