<?php

class PoreController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
				'actions'=>array('index','view','tree'),
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

	
	public function actionTree()
		{
			
			//if (Yii::app()->request->isAjaxRequest)
		//	{
				if ( !$_GET['rooter'] && $_GET['root']=='source' ) {
				
					$criteria = new CDbCriteria();
					$criteria->limit = 10;  
				
					$archs = Pore::model()->findAll($criteria);
					$my_data = array();
					foreach ($archs as $arch) {
						$my_data[$arch->id] = array(
							'text'     => 'Скважина :'.$arch->No ,
							'id'=> 'Pore|'.$arch->id,
							'expanded' => false,
							"hasChildren"=> true
						);	
					} 
					
				} elseif ($_GET['rooter'] && $_GET['root']=='source') {
					
					
					$id_square = $_GET['rooter'];

					$archs=Yii::app()->db->createCommand()
					->select(' * ')
					->from('Pore p')
					->where('p."id" IN ( SELECT f."id_pore" FROM "Fluid" "f" WHERE f."id_square" = :id_square )')
					->bindParam(':id_square',$id_square,PDO::PARAM_STR)
					->queryAll();
					
				//	$criteria = new CDbCriteria();
				//	$criteria->limit = 10;  
					
				//	$archs = Pore::model()->findAll($criteria);
					$my_data = array();
					foreach ($archs as $arch) {

						$my_data[$arch['id']] = array(
							'text'     => 'Скважина :'.$arch['No'] ,
							'id'=> ''.$arch['id'],
							'expanded' => false,
							"hasChildren"=> true
						);	
					}
				

	
				} else {
				
				
				
				$id_square = $_GET['rooter'];
				$id_pore = $_GET['root'];

					$archs=Yii::app()->db->createCommand()
					->select(' * ')
					->from('Fluid f')
					->where(' f."id_pore" = :id_pore ')
					->bindParam(':id_pore',$id_pore,PDO::PARAM_STR)
					->queryAll();
					
				//	$criteria = new CDbCriteria();
				//	$criteria->limit = 10;  
					
				//	$archs = Pore::model()->findAll($criteria);
					$my_data = array();
					foreach ($archs as $arch) {
					
						$table = '
						<table><tr>
						<td>'.$arch['id'].'	</td>
						<td>'.$arch['interval2'].'</td>
						</tr></table>'; 

						$my_data[$arch['id']] = array(
							'text'     => $table ,//$arch['id'],//$table ,
							'id'=> 'Pore|'.$arch['id'],
							'expanded' => false,
						//	"hasChildren"=> true
						);	
					}
				
				
				
				
				}
				
				
				echo CTreeView::saveDataAsJson($my_data);
				
				//	echo CJSON::encode(array(
				//	'status'=>'success',
				//	'content'=>"qqewqewqwe",
				//	));
				exit;
			//}
		}
	
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Pore;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Pore'])) {
			$model->attributes=$_POST['Pore'];
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

		if (isset($_POST['Pore'])) {
			$model->attributes=$_POST['Pore'];
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

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Pore');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Pore('search');
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['Pore'])) {
			$model->attributes=$_GET['Pore'];
		}

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Pore the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Pore::model()->findByPk($id);
		if ($model===null) {
			throw new CHttpException(404,'The requested page does not exist.');
		}
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Pore $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax']==='pore-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}