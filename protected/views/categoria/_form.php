<?php
/* @var $this CategoriaController */
/* @var $model Categoria */
/* @var $form CActiveForm */
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

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'categoria-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
     'htmlOptions' => array('enctype' => 'multipart/form-data', 'class'=>"form-horizontal form-groups-bordered"),
)); ?>

	
	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
						<label class="col-sm-3 control-label">Nome</label>
						
						<div class="col-sm-5 input-group">
                                                  
                                                <?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>100,"class"=>"form-control"));  ?>
                                                <?php echo $form->error($model,'nome'); ?>
						</div>
					</div>
		
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
                                                      <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-blue', "value"=>'Salvar')); ?>
							
						</div>
					</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
                   </div>
                </div>
        </div>
 </div>