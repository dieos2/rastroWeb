<?php
/* @var $this TipoUserController */
/* @var $model TipoUser */

$this->breadcrumbs=array(
	'Tipo Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoUser', 'url'=>array('index')),
	array('label'=>'Create TipoUser', 'url'=>array('create')),
	array('label'=>'View TipoUser', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TipoUser', 'url'=>array('admin')),
);
?>

<h1>Update TipoUser <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>