<?php
/* @var $this LocalizacaoController */
/* @var $model Localizacao */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'localizacao-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_equipamento'); ?>
		<?php echo $form->textField($model,'numero_equipamento'); ?>
		<?php echo $form->error($model,'numero_equipamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numeo_central'); ?>
		<?php echo $form->textField($model,'numeo_central',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'numeo_central'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lat'); ?>
		<?php echo $form->textField($model,'lat',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'lat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'long'); ?>
		<?php echo $form->textField($model,'long',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'long'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'speed'); ?>
		<?php echo $form->textField($model,'speed',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'speed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
		<?php echo $form->error($model,'data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bat'); ?>
		<?php echo $form->textField($model,'bat',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'bat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'signal'); ?>
		<?php echo $form->textField($model,'signal',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'signal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imei'); ?>
		<?php echo $form->textField($model,'imei'); ?>
		<?php echo $form->error($model,'imei'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->