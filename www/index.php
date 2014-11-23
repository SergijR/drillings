<?php
header('Content-Type: text/html; charset=UTF-8',true);
// change the following paths if necessary
$yii=dirname(__FILE__).'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';
$drilling_func=dirname(__FILE__).'/protected/config/drilling_func.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
require_once($drilling_func);
Yii::createWebApplication($config)->run();
