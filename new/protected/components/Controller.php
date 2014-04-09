<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	
	public function filters() {
			return array(
					'accessControl',
			);
	}

	public function accessRules() {
			return array(
					// Разрешаем анонимным пользователям действие "авторизация"
					array('allow',
							'actions' => array('login', 'error', 'recovery','registration'),
							'users' => array('?'),
					),
					// запрещаем аутентифицированным пользователям действие "авторизация"
					array('deny',
							'actions' => array('login'),
							'users' => array('@'),
					),
					// запрещаем анонимным пользователям все действия
					array('deny',
							'users' => array('?'),
					),
			);
	}
	public function translite( $text, $replaces = '') {
	$lang = Yii::t('common',$text);
	if (is_array($replaces)) {
		foreach($replaces as $key=>$replace){
			$lang = str_replace ( $key ,$replace ,$lang );
		}
	}	

	return $lang;
	}
}