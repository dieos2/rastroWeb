<?php
/* @var $this LocalizacaoController */
/* @var $model Localizacao */

$this->breadcrumbs=array(
	'Localizacaos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Localizacao', 'url'=>array('index')),
	array('label'=>'Manage Localizacao', 'url'=>array('admin')),
);
?>

<h1>Create Localizacao</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>