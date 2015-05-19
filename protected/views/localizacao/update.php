<?php
/* @var $this LocalizacaoController */
/* @var $model Localizacao */

$this->breadcrumbs=array(
	'Localizacaos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Localizacao', 'url'=>array('index')),
	array('label'=>'Create Localizacao', 'url'=>array('create')),
	array('label'=>'View Localizacao', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Localizacao', 'url'=>array('admin')),
);
?>

<h1>Update Localizacao <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>