<?php

class FluidController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/sidebar/column_tree';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','tree','test'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Fluid;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Fluid'])) {
			$model->attributes=$_POST['Fluid'];
			if ($model->save()) {
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Fluid'])) {
			$model->attributes=$_POST['Fluid'];
			if ($model->save()) {
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if (Yii::app()->request->isPostRequest) {
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if (!isset($_GET['ajax'])) {
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
			}
		} else {
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
		}
	}

			public function actionIndex()
		{
		$area_1 = $_POST['area_1'];
		
		var_dump($area_1);
			$model = new Fluid('search'); 
			$model->unsetAttributes();
			if (isset($_REQUEST['Fluid']))
			$model->attributes = $_REQUEST['Fluid'];
			
			$dataProvider=new CActiveDataProvider('Fluid');
			$this->render('index',array(
			'dataProvider'=>$dataProvider,
			'model'=>$model,
			));
		}
		
		public function actionTest()
		{
		if (Yii::app()->request->isAjaxRequest)
			{}
		$area_1 = $_POST['area_1'];
		
		var_dump($area_1);
		}
		
		public function actionTree()
		{
			
			if (Yii::app()->request->isAjaxRequest)
			{
				if ( $_GET['root'] ==  'source' ) {
					$archs = Arch::model()->findAll();
					$my_data = array();
					foreach ($archs as $arch) {
						$my_data[$arch->id] = array(
							'text'     => $arch->name ,
							'id'=> 'Arch|'.$arch->id,
							'expanded' => false,
							"hasChildren"=> true
						);	
					}
				} else {
					$gets = explode('|',$_GET['root']);
					$type = $gets[0];
					$id = $gets[1];
					if ($type == 'Arch') {
						
						$arch_id = $id;

						$archs=Yii::app()->db->createCommand()
						->select(' * ')
						->from('Born b')
						->where('b."id" IN ( SELECT f."id_born" FROM "Fluid" "f" WHERE f."id_arch" = :arch_id )')
						->bindParam(':arch_id',$arch_id,PDO::PARAM_STR)
						->queryAll();
				
						$my_data = array();
						foreach ($archs as $arch) {
							$my_data[$arch['id']] = array(
								'text'     => $arch['name'] ,
								'id'=> 'Born|'.$arch['id'],
								'expanded' => false,
								"hasChildren"=> true
							);	
						}
					
					} elseif ($type == 'Born') {
					
						$born_id = $id;

						$archs=Yii::app()->db->createCommand()
						->select(' * ')
						->from('Square s')
						->where('s."id" IN ( SELECT f."id_square" FROM "Fluid" "f" WHERE f."id_born" = :born_id )')
						->bindParam(':born_id',$born_id,PDO::PARAM_STR)
						->queryAll();
						
						$my_data = array();
						foreach ($archs as $arch) {
							$my_data[$arch['id']] = array(
							//	'text'     => '<a href="#" onclick="tl_refresh_fluids(\''.$arch['id'].'\')" title="">'.$arch['name'].'</a>' ,
								'text'     => '<a href="#" onclick="tl_refresh_pores_new(\''.$arch['id'].'\')" title="">'.$arch['name'].'</a>' ,
								'id'=> 'Square|'.$arch['id'],
								'expanded' => false,
							//	"hasChildren"=> true
							);	
							
						}		
					
					
					} elseif ($type == 'Square') {
			
					//здесь надо доаставать и отображать таблицу
					
					}
				
				
				
				}
				
				
				echo CTreeView::saveDataAsJson($my_data);
				
				//	echo CJSON::encode(array(
				//	'status'=>'success',
				//	'content'=>"qqewqewqwe",
				//	));
				exit;
			}
		}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Fluid('search');
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['Fluid'])) {
			$model->attributes=$_GET['Fluid'];
		}

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Fluid the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Fluid::model()->findByPk($id);
		if ($model===null) {
			throw new CHttpException(404,'The requested page does not exist.');
		}
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Fluid $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax']==='fluid-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}