<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$id_user = Yii::app()->user->getId();
$model = User::model()->find($condition = "id=$id_user");

if (Consultor::model()->exists($condition = "id_user=$id_user")) {
    $tipo = "Consultor";
    $perfil = Consultor::model()->find($condition = "id_user=$id_user");
} else {
    $tipo = "Admin";
}
?>

<div class="row">
<hr />
			<ol class="breadcrumb bc-3">
						<li>
				<a href="index.php"><i class="entypo-home"></i>Home</a>
			</li>
					<li>
			
							<a href="index.php/perfil">Perfil</a>
					</li>
				<li class="active">
			
							<strong>Editar</strong>
					</li>
					</ol>
			
<h2>Gerenciamento de Perfil</h2>
<br />
 <div class="row">
	<div class="col-md-12">
		 
		<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
					Dados basicos
				</div>
				
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
                    <div class="panel-body">
<div class="form">
      <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'perfil-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('enctype' => 'multipart/form-data', 'class'=>"form-horizontal form-groups-bordered"),
    )); ?>
    <div class="form-group">
						<label class="col-sm-3 control-label">Nome de Usuario</label>
						
						<div class="col-sm-5 input-group">
                                                  
                                                      <div class="span9"> <?php echo $model->username ?></div>
                                                  
						</div>
					</div>


<?php
if ($tipo != "Admin") {
      echo '<div class="form-group">'.
						'<label class="col-sm-3 control-label">Nome</label>'.
						
						'<div class="col-sm-5 input-group">'.
                                                  
                                                     $perfil->nome . ' <span class="mark"></span>'.
                                                  
						'</div>'.
					'</div>'.
                      '<div class="form-group">'.
						'<label class="col-sm-3 control-label">E-mail</label>'.
						
						'<div class="col-sm-5 input-group">'.
                                                  
                                                     $perfil->email . '<span class="mark"></span>'.
                                                  
						'</div>'.
					'</div>';
    
}
?>
               <div class="form-group">
						<label class="col-sm-3 control-label">Tipo</label>
						
						<div class="col-sm-5 input-group">
                                                  
                                                      <?php echo $tipo ?> <span class="mark"></span>
                                                  
						</div>
					</div>
              
               
  
          <?php $this->endWidget(); ?>
            </div>
                         </div>    
</div>
        </div>
 </div>
            <div class="row-form">
               <?php if ($tipo != "Admin") {
                echo '<a id="edita" href="#" class ="btn btn-green">Editar</a>';
               } ?>
                <a id="senha" href="#" class ='btn btn-success '>Alterar Senha</a>
            </div> 
      
                  
        <div id="divEditar" class="span4 column">
<?php
if ($tipo == "Consultor") {
    
    echo $this->renderPartial('_formConsultor', array('model' => $perfil));
}
?> 

        </div>
        <div id='divSenha' class="span4 column">
<?php
 echo $this->renderPartial('_formSenha');
 ?>
        </div>
   
<script>
    $(function() {
        $("#divEditar").hide();
         $("#divSenha").hide();
        $("#edita").click(function() {
            $("#divEditar").fadeIn();
        });
         $("#senha").click(function() {
            $("#divSenha").fadeIn();
        });
        
    });
</script>