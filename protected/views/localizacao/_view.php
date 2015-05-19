<?php
/* @var $this LocalizacaoController */
/* @var $data Localizacao */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_equipamento')); ?>:</b>
	<?php echo CHtml::encode($data->numero_equipamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numeo_central')); ?>:</b>
	<?php echo CHtml::encode($data->numeo_central); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lat')); ?>:</b>
	<?php echo CHtml::encode($data->lat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('long')); ?>:</b>
	<?php echo CHtml::encode($data->long); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('speed')); ?>:</b>
	<?php echo CHtml::encode($data->speed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('bat')); ?>:</b>
	<?php echo CHtml::encode($data->bat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('signal')); ?>:</b>
	<?php echo CHtml::encode($data->signal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imei')); ?>:</b>
	<?php echo CHtml::encode($data->imei); ?>
	<br />

	*/ ?>

</div>