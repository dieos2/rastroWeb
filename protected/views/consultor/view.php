<?php
/* @var $this ConsultorController */
/* @var $model Consultor */

$this->breadcrumbs=array(
	'Consultors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Consultor', 'url'=>array('index')),
	array('label'=>'Create Consultor', 'url'=>array('create')),
	array('label'=>'Update Consultor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Consultor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Consultor', 'url'=>array('admin')),
);
?>

<h1>View Consultor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'email',
		'id_user',
	),
)); ?>
