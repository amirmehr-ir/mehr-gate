<?php

$env = env( 'APP_ENV' ) == 'local';

return [

	'local' => $env,

	'url' => [
		'front' => env( 'APP_URL_FRONT' ),
		'back'  => env( 'APP_URL' ),
	],

	'gate' => [
		'token'    => env( 'MEHR_GATE_TOKEN', 'test' ),
		'callback' => env( 'MEHR_GATE_CALLBACK' ),
		'test'     => env( 'MEHR_GATE_TEST', true )
	],

	'sms' => [
		'token' => env( 'SMS_API' )
	]

];
