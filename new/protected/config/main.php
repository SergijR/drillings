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
		'srbac' => array(
			'userclass'=>'Users', //default: User
			'userid'=>'id', //default: userid
			'username'=>'username', //default:username
			'delimeter'=>'@', //default:-
			'debug'=>false, //default :false
			'pageSize'=>10, // default : 15
			'superUser' =>'Authorizer', //default: Authorizer
			'css'=>'srbac.css', //default: srbac.css
			'layout'=>'application.views.layouts.main', //default: application.views.layouts.main,
			//must be an existing alias
			'notAuthorizedView'=> 'srbac.views.authitem.unauthorized', // default:
			//srbac.views.authitem.unauthorized, must be an existing alias
			'alwaysAllowed'=>array( //default: array()
			'SiteLogin','SiteLogout','SiteIndex','SiteAdmin',
			'SiteError', 'SiteContact'),
			'userActions'=>array('Show','View','List'), //default: array()
			'listBoxNumberOfLines' => 15, //default : 10 'imagesPath' => 'srbac.images', // default: srbac.images 'imagesPack'=>'noia', //default: noia 'iconText'=>true, // default : false 'header'=>'srbac.views.authitem.header', //default : srbac.views.authitem.header,
			//must be an existing alias 'footer'=>'srbac.views.authitem.footer', //default: srbac.views.authitem.footer,
			//must be an existing alias 'showHeader'=>true, // default: false 'showFooter'=>true, // default: false
			'alwaysAllowedPath'=>'srbac.components', // default: srbac.components
			// must be an existing alias
			)
	),

	// application components
	'components'=>array(
	'authManager'=>array(
		// Path to SDbAuthManager in srbac module if you want to use case insensitive
		//access checking (or CDbAuthManager for case sensitive access checking)
	//	'class'=>'	      modules.srbac.components.SDbAuthManager',
		'class'=>'application.modules.srbac.components.SDbAuthManager',


		// The database component used
		'connectionID'=>'db',
		// The itemTable name (default:authitem)
		'itemTable'=>'au_items',
		// The assignmentTable name (default:authassignment)
		'assignmentTable'=>'au_assignments',
		// The itemChildTable name (default:authitemchild)
		'itemChildTable'=>'au_itemchildren',
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
			'password' => '',
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

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
	
);