<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => [
		'domain' => '',
		'secret' => '',
	],

	'mandrill' => [
		'secret' => '',
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'App\User',
		'secret' => '',
	],
	'facebook' => [
	    'client_id' => 	'481929058625608',
	    'client_secret' => '26b4aca09032f926654d02f7d0f29f7d',
	    'redirect' => 'http://plm.com/login/facebook',
	],
	'twitter' => [
	    'client_id' => 'TJwiL5DiEk76yXyyXVjo4KCAp',
	    'client_secret' => '4xHceYgyC31JHJyI7vuJOv5iKKFu8QnUAk1gz2xW6QMAvkbFjN',
	    'redirect' => 'http://plm.com/login/twitter',
	],
	'github' => [
	    'client_id' => '28d79149a9aadcaf6007',
	    'client_secret' => 'b96663462df71c71115409168d9341aef83beeed',
	    'redirect' => 'http://plm.com/login/github',
	],
	'google' => [
	    'client_id' => '1007343003310-mb2q614mu2ps7choaes8ik9omrd5eh31.apps.googleusercontent.com',
	    'client_secret' => 'jWP2fOlAwzLYlPxzuDbN-jjq',
	    'redirect' => 'http://plm.com/login/google',
	]

];
