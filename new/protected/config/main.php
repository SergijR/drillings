<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Drilling',
	'theme'=>'bootstrap', // requires you to copy the theme under your themes directory
	 
	'sourceLanguage' => 'en_EN',
	'language' => 'ru_RU',

	// preloading 'log' component
	'preload'=>array('log'),
	'aliases' => array(
        'bootstrap' => realpath(__DIR__ . '/../extensions/bootstrap'), // change this if necessary
    ),

	// autoloading model and component classes
	'import'=>array(
        'application.models.*',
        'application.components.*',
		'bootstrap.helpers.TbHtml',
		'application.modules.srbac.controllers.SBaseController',
		
		'application.modules.user.models.*',
		'application.modules.user.components.*',
		'application.extensions.CAdvancedArFindBehavior',
		'application.extensions.MTreeView.*'
    ),
	
	
	// application components
	'components'=>array(
	'authManager' => array(
       'class'  => 'CDbAuthManager',
       'connectionID'     => 'db',
       'itemTable'          => 'AuthItem',
       'itemChildTable'    => 'AuthItemChild',
       'assignmentTable' => 'AuthAssignment',
       'defaultRoles'       =>  array('Guest'),
    ),
		'user'=>array(
			// enable cookie-based authentication
			'class' => 'WebUser',
			'allowAutoLogin'=>true,
            'loginUrl' => array('/user/login'),
		),
		'bootstrap'=>array(
            'class'=>'bootstrap.components.TbApi',
        ),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'pgsql:host=localhost;port=5432;dbname=new_drilling',
		//	'connectionString' => 'pgsql:host=localhost;port=5432;dbname=primut_drilling',
			'emulatePrepare' => true,
			'username' => 'postgres',
			'password' => '112233',
		/*	'username' => 'primut',
			'password' => '1992cnhfcnm2009',*/
			'charset' => 'utf8',
			'tablePrefix' => 'tbl_',
	),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'user' => array(
        // названия таблиц взяты по умолчанию, их можно изменить
			'tableUsers' => 'tbl_users',
			'tableProfiles' => 'tbl_profiles',
			'tableProfileFields' => 'tbl_profiles_fields',
			    # encrypting method (php hash function)
			    'hash' => 'md5',

			    # send activation email
			    'sendActivationMail' => true,

			    # allow access for non-activated users
			    'loginNotActiv' => true,

			    # activate user on registration (only sendActivationMail = false)
			    'activeAfterRegister' => false,

			    # automatically login from registration
			    'autoLogin' => true,

			    # registration path
			    'registrationUrl' => array('/user/registration'),

			    # recovery password path
			    'recoveryUrl' => array('/user/recovery'),

			    # login form path
			    'loginUrl' => array('/user/login'),

			    # page after login
			    'returnUrl' => array('/user/profile'),

			    # page after logout
			    'returnLogoutUrl' => array('/user/login'),
			),
		'gii'=>array(
			'generatorPaths'=>array(
                'bootstrap.gii',
            ),
			'class'=>'system.gii.GiiModule',
			'password'=>'777',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		'srbac'   => array(
                   // Модель для работы с таблицой пользователей
                   'userclass' => 'User',
                   // Уникальный идентификатор пользователя
                   'userid'    => 'id',
                   // Название поля содержащего имя пользователя
                   'username'  => 'username',
                   // В режиме отладки все пользователи могут управлять правилами доступа
                   'debug'     => true,
                   // Колличество пунктов выводимых на 1 странице
                   'pageSize'  => 20,
                   // Название роли супер пользователя
                   'superUser' => 'Authority',
                   // Файл стилей для модуля
                   'css'       => 'srbac.css',
                   // Операции разрещенные польщователю                       
                   'userActions'          => array('Show','View','List','Index'),
                   //
                   'listBoxNumberOfLines' => 15,
                   ),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
	
);