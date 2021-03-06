<?php
/* @var $this TipoUserController */
/* @var $model TipoUser */

$this->breadcrumbs=array(
	'Tipo Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TipoUser', 'url'=>array('index')),
	array('label'=>'Create TipoUser', 'url'=>array('create')),
	array('label'=>'Update TipoUser', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TipoUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoUser', 'url'=>array('admin')),
);
?>

<h1>View TipoUser #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tipo',
	),
)); ?>
