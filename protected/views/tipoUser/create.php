<?php
/* @var $this TipoUserController */
/* @var $model TipoUser */

$this->breadcrumbs=array(
	'Tipo Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoUser', 'url'=>array('index')),
	array('label'=>'Manage TipoUser', 'url'=>array('admin')),
);
?>

<h1>Create TipoUser</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>