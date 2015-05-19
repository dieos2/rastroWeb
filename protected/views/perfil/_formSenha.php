<?php
$id_user = Yii::app()->user->getId();
 $user = User::model()->find($condition="id=$id_user");
?>
 <div class="row">
	<div class="col-md-12">
		 
		<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
					Formulario
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
        'id' => 'senha-form',
        'action' => Yii::app()->createUrl('/perfil/senha'),
        'enableAjaxValidation' => false,
         'htmlOptions' => array('enctype' => 'multipart/form-data', 'class'=>"form-horizontal form-groups-bordered"),
    ));
    ?>
                      <div class="form-group">
						<label for="nome" class="col-sm-3 control-label">Senha Anterior:</label>
						
						<div class="col-sm-5">
                                                   <input id='senhaatual' type="password" name='senhaatual'/>
                                    <span class="bottom">Senha atual não confere</span></div>
							
						</div>
					
    <div class="form-group">
						<label for="nome" class="col-sm-3 control-label">Nova Senha:</label>
						
						<div class="col-sm-5">
                                                  <input type="password" name='passwordNova' id='passwordNova'/>
                                     <span class="bottom">Repita a mesma senha</span></div>
							
						</div>
					
    <div class="form-group">
						<label for="nome" class="col-sm-3 control-label">Repita:</label>
						
						<div class="col-sm-5">
                                                    <input type="password" name='repeti' id='repeti' />
                                     <span class="bottom">Repita a mesma senha</span></div>
							
						</div>
					
                          
                                  <div class="form-group">
                                      
                       <button id='salvasenha' type='button' class='btn btn-blue'>Salvar</button>
                    </div> 
                               <input id='id' name='id' value='<?php echo $user->id ?>' class ='hidden' />
                       
                   
<?php $this->endWidget(); ?>
</div>
                    </div>
                </div>
        </div>
 </div>
 <script type='text/javascript' src='js/validationSenha.js'></script>
<script>
   
    $(function(){
        $(".bottom").hide();
       $("#salvasenha").click(function(){
           debugger;
           var validation = Conferesenha('<?php echo $user->password ?>');
               validation = Conferenovasenha();       
    if(validation)
               {
                   $("#senha-form").submit();
               }
       
       });
      
        
    });
 
    </script>