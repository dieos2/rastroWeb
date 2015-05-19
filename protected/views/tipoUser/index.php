<?php
/* @var $this TipoUserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Users',
);

$this->menu=array(
	array('label'=>'Create TipoUser', 'url'=>array('create')),
	array('label'=>'Manage TipoUser', 'url'=>array('admin')),
);
?>

<h1>Tipo Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
