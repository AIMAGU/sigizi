<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
	'modules' => [
		'user' => [
			'class' => 'dektrium\user\Module',
			'enableUnconfirmedLogin' => true,
			'confirmWithin' => 21600,
			'cost' => 12,
			'admins' => ['atin'],
			'mailer' => [
				'sender'                => ['sigiziatin@gmail.com' => 'SIGIZI'], // or ['no-reply@myhost.com' => 'Sender name']
				'welcomeSubject'        => 'Welcome subject',
				'confirmationSubject'   => 'Confirmation subject',
				'reconfirmationSubject' => 'Email change subject',
				'recoverySubject'       => 'Recovery subject',
			],
		],
		'rbac' => 'dektrium\rbac\RbacWebModule',
	],
    'components' => [
		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'rules' => [
				'/register' => '/user/registration/register',
				'/resend' => '/user/registration/resend',
				'/confirm' => '/user/registration/confirm',
				'/login' => '/user/security/login',
				'/logout' => '/user/security/logout',
				'/request' => '/user/recovery/request',
				'/reset' => '/user/recovery/reset',
				'/profile' => '/user/settings/profile',
				'/account' => '/user/settings/account',
				'/networks' => '/user/settings/networks',
				'/show' => '/user/profile/show',
				'/index' => '/user/admin/index'
			],
		],
		'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'rdmW_WZbQm8KKk_E9vpKAa0jzO_qwt2N',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        /* 'user' => [
			'identityClass' => 'app\models\User',
			'enableAutoLogin' => true,
		], */
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /* 'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ], */
		'mailer' => [
			'class' => 'yii\swiftmailer\Mailer',
			'useFileTransport' => false,
			'transport' => [
				'class' => 'Swift_SmtpTransport',
				'host' => 'smtp.gmail.com',
				'username' => 'sigiziatin@gmail.com',
				'password' => 'prihatin',
				'port' => '465', //587
				'encryption' => 'ssl',
			],
		],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
