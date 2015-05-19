<?php

class LocalizacaoController extends Controller
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
				'actions'=>array('sms','view', 'getGeo'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','index','historico'),
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
	public function actionSms()
	{
		$model=new Localizacao;
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		
			//setup PHP UTF-8 stuff
                    setlocale(LC_CTYPE, 'en_US.UTF-8');
                    mb_internal_encoding("UTF-8");
                    mb_http_output('UTF-8');

//
//read parameters from HTTP Get URL
                    $phone = $_GET["phone"];
                    $smscenter = $_GET["smscenter"];
                    $text_utf8 = rawurldecode($_GET["text"]);
					$pieces = explode(" ", $text_utf8);
                    $model->numero_equipamento = $phone;
                    $model->numeo_central = $smscenter;
                    $model->lat = $pieces[1];
                    $model->long= $pieces[2];
                    $model->speed = '0';
                    $model->bat = 'f';
                    $model->signal = 'f'; 
                    $model->imei = '1241';
					$model->data= new CDbExpression('NOW()');
                   
                   
                   echo $model->save();
				   
                 
		
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

		if(isset($_POST['Localizacao']))
		{
			$model->attributes=$_POST['Localizacao'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$criteria = new CDbCriteria;	
$criteria->order = "id desc";

$model	= Localizacao::model()->find($criteria);
		$this->render('index',array(
			'model'=>$model,
		));
	}
        
          public function actionGetGeo($quant = 1) {
           $this->layout = false;
            header('Content-type: application/json');
             $arr = array();
             $arrayCgeo = array();
              $Criteria = new CDbCriteria();
              $Criteria->order = "data desc";
              $Criteria->limit = $quant;
             
        $geoLoca = Localizacao::model()->findAll($Criteria);
		foreach ($geoLoca as $item) {
            array_push($arr,$item->id, $item->lat, $item->long, $item->data, $item->speed,$item->bat, $item->signal);
            array_push($arrayCgeo, $arr);
            $arr = array();
        }
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
        header("Access-Control-Allow-Headers: Authorization");
        echo json_encode($arrayCgeo);

        Yii::app()->end();
}
public function actionHistorico()
	{
		$criteria = new CDbCriteria;	
$criteria->order = "id desc";

$model	= Localizacao::model()->find($criteria);
		$this->render('index',array(
			'model'=>$model,
		));
	}
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Localizacao('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Localizacao']))
			$model->attributes=$_GET['Localizacao'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Localizacao the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Localizacao::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Localizacao $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='localizacao-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
