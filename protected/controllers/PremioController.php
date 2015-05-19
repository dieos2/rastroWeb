<?php

class PremioController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	

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
				'actions'=>array('index','view','gerarPDF','GetProdutos'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','deletar'),
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
           public function actionGerarPDF($id=0) {
        require_once("fpdf/fpdf.php");
        $pdf = new FPDF("L", "pt", "A4");
        $pdf->AddPage();
        $pdf->Image('images/logo-light@2x.png');
        $pdf->SetFont('arial', 'B', 10);
        $pdf->Cell(0, 5, "Relatorio - Lancamento de Pontos", 0, 1, 'C');
        $pdf->Cell(0, 5, "", "B", 1, 'C');
        $pdf->Ln(50);

//cabeçalho da tabela
        $pdf->SetFont('arial', 'B', 10);
       
        $pdf->Cell(500, 20, 'Nome ', 1, 0, "L");
        $pdf->Cell(200, 20, 'Categoria', 1, 0, "L");
        
        $pdf->Cell(100, 20, 'Valor', 1, 1, "L");
        

//linhas da tabela
        $pdf->SetFont('arial', '', 10);
          if ($id == 0) {
         $model = Premio::model()->findAll();
          }else
          {
            $Criteria = new CDbCriteria();
            $Criteria->condition = "id_categoria=$id";
            $model = Premio::model()->findAll($Criteria);
          }
          foreach ($model as $item) {
          
        
            $pdf->Cell(500, 20,$item->nome, 1, 0, "L");
            
            $pdf->Cell(200, 20, $item->idCategoria->nome, 1, 0, "L");
            
               $pdf->Cell(100, 20, $item->pontos, 1, 1, "L");
          }
        
        $pdf->Output("Produtos.pdf", "D");
    }
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
             $id_user = Yii::app()->user->getId();
        $model = User::model()->findByPk($id_user);
        $tipo = $model->id_tipoUser;
        if($tipo == "1"){
        
		$model=new Premio;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Premio']))
		{
                    //$pontos = str_replace(".",",",$model->pontos);
                    //$model->pontos = $pontos;
                    $model->imagem = CUploadedFile::getInstance($model, 'imagem');
                           // redirect to success page
                        $arquivo = uniqid("", true).$model->id.'.jpg';
                         $model->imagem->saveAs('imagens/'.$arquivo);
                         $model->imagem = $arquivo;
			 $model->attributes=$_POST['Premio'];
                         $model->pontos = str_replace('.', "", $model->pontos);
                         $model->pontos = str_replace(',', "", $model->pontos);
			if($model->save())
				$this->redirect(array('index'));
		}
             
		$this->render('create',array(
			'model'=>$model,
		));
        }  else {
            $this->redirect(array('User/ChecaTipo'));
        }
	}
        public function actionGetProdutos($id) {
           $this->layout = false;
        header('Content-type: application/json');
             $arr = array();
              $arrProdutos = array();
              $Criteria = new CDbCriteria();
        $id_categoria = $id;
        
              if ($id_categoria != 0) {
         $Criteria->condition = "id_categoria = $id_categoria";
         $premio = Premio::model()->findAll($Criteria);
        } else {
            $premio = Premio::model()->findAll();
       
        }
		foreach ($premio as $item) {
            array_push($arr, $item->id, $item->nome, $item->pontos, $item->imagem, $item->id_categoria);
            array_push($arrProdutos, $arr);
            $arr = array();
        }
        echo json_encode($arrProdutos);

        Yii::app()->end();
}
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{ $id_user = Yii::app()->user->getId();
        $modelUser = User::model()->findByPk($id_user);
        $tipo = $modelUser->id_tipoUser;
        if($tipo == "1"){
        $model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Premio']))
		{  if(CUploadedFile::getInstance($model, 'imagem') != null){
                    $model->imagem = CUploadedFile::getInstance($model, 'imagem');
                           // redirect to success page
                        $arquivo = uniqid("", true).$model->id.'.jpg';
                       
                         $model->imagem->saveAs('imagens/'.$arquivo);
                         $model->imagem = $arquivo;
                        }  else {
                            $modelPremio = Premio::model()->findByPk($id);
                             $model->imagem = $modelPremio->imagem ;
                        }
                        $model->attributes=$_POST['Premio'];
			$model->save();
				$this->redirect(array('index'));
		}

		$this->render('update',array(
			'model'=>$model,
		));
        }  else {
            $this->redirect(array('User/ChecaTipo'));
        }
		
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
         public function actionDeletar($id)
        {
              $id_user = Yii::app()->user->getId();
        $model = User::model()->findByPk($id_user);
        $tipo = $model->id_tipoUser;
        if($tipo == "1"){
        $this->loadModel($id)->delete();
            $this->redirect(array('index'));
        }  else {
            $this->redirect(array('User/ChecaTipo'));
        }
            
        }
	public function actionDelete($id)
	{
             $id_user = Yii::app()->user->getId();
        $model = User::model()->findByPk($id_user);
        $tipo = $model->id_tipoUser;
        if($tipo == "1"){
        $this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
        }  else {
            $this->redirect(array('User/ChecaTipo'));
        }
		
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex($id=0)
	{  
            
            $id_user = Yii::app()->user->getId();
        $model = User::model()->findByPk($id_user);
        $id_categoria = $id;
        $tipo = $model->id_tipoUser;
              if ($id != 0) {
            $dataProvider = new CActiveDataProvider('Premio', array(
                'criteria' => array(
                    'condition' => "id_categoria = $id",
                   
                ),
                'pagination'=>false
               ));
        } else {
           
       
        $dataProvider=new CActiveDataProvider('Premio',array('pagination'=>false));
		
        }
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
                        'id_categoria'=>$id_categoria,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Premio('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Premio']))
			$model->attributes=$_GET['Premio'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Premio the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Premio::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Premio $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='premio-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
