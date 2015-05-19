
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
        'id' => 'perfil-form',
        'action' => Yii::app()->createUrl('/perfil/update'),
        'enableAjaxValidation' => false,
        'htmlOptions' => array('enctype' => 'multipart/form-data', 'class'=>"form-horizontal form-groups-bordered"),
    ));
    ?>
	<div class="form-group">
						<label for="nome" class="col-sm-3 control-label">Username:</label>
						
						<div class="col-sm-5">
                                                    <?php echo $form->textField($user, 'username', array('type'=>"text", 'class'=>"form-control", 'placeholder'=>"Nome do produto")); ?>
                                                    <?php echo $form->error($user, 'username'); ?>
							
						</div>
					</div>
                           <div class="form-group">
						<label for="nome" class="col-sm-3 control-label">Nome:</label>
						
						<div class="col-sm-5">
                                                    <?php echo $form->textField($model, 'nome', array('type'=>"text", 'class'=>"form-control", 'placeholder'=>"Nome do produto")); ?>
                                                    <?php echo $form->error($model, 'nome'); ?>
							
						</div>
					</div>
    <div class="form-group">
						<label for="nome" class="col-sm-3 control-label">E-mail:</label>
						
						<div class="col-sm-5">
                                                    <?php echo $form->textField($model, 'email', array('type'=>"text", 'class'=>"form-control", 'placeholder'=>"Nome do produto")); ?>
                                                    <?php echo $form->error($model, 'email'); ?>
							
						</div>
					</div>
                                
                           
                                	<div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
                                                      <?php echo CHtml::submitButton($model->isNewRecord ? 'Update' : 'Save', array('class'=>'btn btn-blue')); ?>
							
						</div>
					</div>
     
                     
                               <input id='id' name='id' value='<?php echo $model->id ?>' class ='hidden' />
                              
                       
    
                         
                   
<?php $this->endWidget(); ?>
</div>
                    </div>
                </div>
        </div>
 </div>
<script>
    $(function(){
       
        var form = $("#perfil-form");
        $("").click(function(){
             debugger;
             
         $.ajax({
            type: "POST",
            url: "index.php?r=perfil/update/",
            dataType: "json",
            data: form.serialize(),
            success: function(response, status) {
                alert(response);
            },
            error: function(response, status) {
                alert("Fucking Bull Shit!");
            },
        }); 
        });
        
    });
    </script>