<?php
/* @var $this LocalizacaoController */
/* @var $model Localizacao */

$this->breadcrumbs=array(
	'Localizacaos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Localizacao', 'url'=>array('index')),
	array('label'=>'Create Localizacao', 'url'=>array('create')),
	array('label'=>'Update Localizacao', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Localizacao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Localizacao', 'url'=>array('admin')),
);
?>

<h1>View Localizacao #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'numero_equipamento',
		'numeo_central',
		'lat',
		'long',
		'speed',
		'data',
		'bat',
		'signal',
		'imei',
	),
)); ?>
