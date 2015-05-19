<?php

class ConsultorController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
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
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update','EnviaEmail','Rank'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete', 'deletar'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $id_user = Yii::app()->user->getId();
        $model = User::model()->findByPk($id_user);
        $tipo = $model->id_tipoUser;
        if ($tipo == "1") {
            $model = new Consultor;
            $modelUser = new User;

            // Uncomment the following line if AJAX validation is needed
            // $this->performAjaxValidation($model);

            if (isset($_POST['Consultor'])) {
                $model->attributes = $_POST['Consultor'];
                if ($model->save())
                    $this->redirect(array('view', 'id' => $model->id));
                
                
               
                $senha = uniqid("", true);
                $modelUser->password = $senha;
                $modelUser->username = $_POST['username'];
                $modelUser->email = trim($model->email);
                $modelUser->attributes = $modelUser;
                $modelUser->id_tipoUser = 4;
                $modelUser->senha = '0';

                if ($modelUser->save()) {

                    $model->id_user = $modelUser->id;
                    if ($model->save()) {
                        $this->redirect(array('EnviaEmail', 'nomedestinatario' => $model->nome, "emaildestinatario" => $model->email, "nomedeusuario" => $modelUser->username, "senha" => $modelUser->password));
                    }
                }
                
            }

             $this->render('create', array(
                'model' => $model,
            ));
           
        }else {
            $this->redirect(array('User/ChecaTipo'));
        }
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
          $id_user = Yii::app()->user->getId();
        $model = User::model()->findByPk($id_user);
        $tipo = $model->id_tipoUser;
        if($tipo == "1"){
       $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

       if (isset($_POST['Consultor'])) {
            $model->attributes = $_POST['Consultor'];
            if ($model->save())
                $this->redirect(array('index'));
        }

        $this->render('update', array(
            'model' => $model,
        ));
        }  else {
            $this->redirect(array('User/ChecaTipo'));
        }
        
              
             // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        
    }
 public function actionDeletar($id) {

        $model = $this->loadModel($id);
        $id_user = $model->id_user;
        $model->delete();
        $this->redirect(array('user/deletarConsultor', 'id' => $id_user));
    }
    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
         $id_user = Yii::app()->user->getId();
        $model = User::model()->findByPk($id_user);
        $tipo = $model->id_tipoUser;
        if ($tipo == "1") {
        $dataProvider = new CActiveDataProvider('Consultor', array(
            'pagination'=>false
        ));
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
        }  else {
             $this->redirect(array('User/ChecaTipo'));
        }
    }
public function actionRank()
{
     $id_user = Yii::app()->user->getId();
        $model = User::model()->findByPk($id_user);
        $tipo = $model->id_tipoUser;
        if ($tipo == "4") {
         $this->render('rank');
        }
 else {
      $this->redirect(array('User/ChecaTipo'));
 }
}
    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Consultor('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Consultor']))
            $model->attributes = $_GET['Consultor'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Consultor the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Consultor::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }
  public function actionEnviaEmail($nomedestinatario, $emaildestinatario, $nomedeusuario, $senha) {


// Passando os dados obtidos pelo formulÃ¡rio para as variÃ¡veis abaixo

       $assunto = "[GPD]- Cadastro no Site";

        $mensagem = "Olá " . $nomedestinatario . ", você foi cadastrado no site do GPD - 
GRUPO PARAENSE DE DECORAÇÃO,composta pelas lojas: S.C.A., SPAZIO DEL BAGNO, SACCARO, +DESIGN e PORTOBELLO.<br> Agora voce pode acompanhar a sua pontuação, à qual apenas voce tem acesso.<br>Aguardamos voce em todas as nossas cinco lojas para faça parte da relação dos grandes vencedores do GPD.<br>Abaixo segue seus dados para que possa logar no sistema. <br><br> Usuario: " . $nomedeusuario . "<br> Senha Provisoria: " . $senha . " <br> 
você pode alterar sua senha neste link <a href='www.gpd.arq.br/admin/index.php?r=site/login'>Trocar senha de acesso</a>
<br>Para ver seu extrato de pontos click <a href='www.gpd.arq.br/admin/index.php?r=site/login'>aqui</a>";


        /* Montando a mensagem a ser enviada no corpo do e-mail. */
        $mensagemHTML = '<P>FORMULARIO PREENCHIDO NO SITE WWW.GPD.ARQ.BR</P>
<p><b>Assunto:</b> ' . $assunto . '
<p><b>Mensagem:</b> ' . $mensagem . '</p>
<hr>';


// O remetente deve ser um e-mail do seu domÃ­nio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
        $headers = "MIME-Version: 1.1\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "From: GPD Grupo Paraense de Decoração\r\n"; // remetente
        $headers .= "Return-Path: $emaildestinatario \r\n"; // return-path
        $envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers);

        $this->redirect(array('index'));
    }
    /**
     * Performs the AJAX validation.
     * @param Consultor $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'consultor-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
